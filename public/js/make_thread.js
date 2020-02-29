let col = 0;
let row = 0;

window.onload = function(){ //起動したときに一つ作る
  new Temp(col,row,1).make_temp();
}
//クラスの作成

class Temp{

  constructor(col,row,type){
    this.col = col;
    this.row = row;
    this.type = type;
  }

  make_temp(){

    function make_id(col,row){
      return String(col) + "-" + String(row);
    }

    function delete_button(id){
      if(!document.getElementById(id)){
        return
      }
      else document.getElementById(id).classList.add('hidden');
      return;
    }
  //タグの生成
  if(this.type ==1 ||this.type == 2){
    if(!document.getElementById(`col_${this.col}`)){
      const sec = document.createElement('div');
      sec.id =`col_${this.col}`;
      sec.classList.add('content');
      document.getElementById("wrapper").appendChild(sec);
    }
  }
  switch(this.type){
    case 0 :delete_button(make_id(this.col - 1, this.row) + "U");
            delete_button(make_id(this.col -1 ,this.row -1 ) + "UR");
            break;
    case 1 :delete_button(make_id(this.col,this.row -1 ) + "R");
            delete_button(make_id(this.col -1 ,this.row -1 ) + "UR");
            break;
    case 2 :delete_button(make_id(this.col, this.row -1) + "R");
            delete_button(make_id(this.col-1, this.row) + "U");

  }
  var top = document.createElement('h2');
  var test = document.createElement('textarea');
  var addunderbutton = document.createElement('input');
  var addrightbutton = document.createElement('input');
  var addLowerRightbutton = document.createElement('input');


  
  top.innerHTML = make_id(this.col,this.row);
  //テキストエリアの設定
  test.name = `comment[${this.col}][${this.row}]`;
  test.cols = 40;

  //ボタンの設定
  addunderbutton.type ='button';
  addunderbutton.value = '下に追加';
  addunderbutton.id = make_id(this.col,this.row) + "U";
  addunderbutton.addEventListener('click',()=>{
    addunderbutton.classList.add('hidden');
  },false);
  addunderbutton.addEventListener('click', ()=>{
    
    new Temp(this.col + 1,this.row, 1).make_temp(); //下に追加　行を1追加

}, false);

  addrightbutton.type ='button';
  addrightbutton.value ='右に追加';
  addrightbutton.id = make_id(this.col,this.row) +"R";
  addrightbutton.addEventListener('click',()=>{
    addrightbutton.classList.add('hidden');
    test.classList.add('addRight');

  })
  addrightbutton.addEventListener('click',()=>{
  new Temp(this.col,this.row + 1,0).make_temp(); //右に追加 列を1追加
},false);

  addLowerRightbutton.type = 'button';
  addLowerRightbutton.value ='右下に追加';
  addLowerRightbutton.id = make_id(this.col,this.row) +"UR";
  addLowerRightbutton.addEventListener('click',()=>{
    addLowerRightbutton.classList.add('hidden');
  })
  addLowerRightbutton.addEventListener('click', ()=>{
  new Temp(this.col + 1,this.row + 1, 2).make_temp();//右下に追加 行と列を1追加
},false);
  //追加
  document.getElementById(`col_${this.col}`).appendChild(top);
  document.getElementById(`col_${this.col}`).appendChild(test);
  document.getElementById(`col_${this.col}`).appendChild(addunderbutton);
  document.getElementById(`col_${this.col}`).appendChild(addrightbutton);
  document.getElementById(`col_${this.col}`).appendChild(addLowerRightbutton);

  }    
} 