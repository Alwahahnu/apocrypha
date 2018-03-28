function register_item(){
    var name=$("#name").val();
    var firstNum=$("#firstNum").val();
    var lastNum=$("#lastNum").val();
    var type=$("#type").val();
    var category=$("#category").val();
    var author=$("#author").val();
    
    console.log("name = "+name+" ; firstnum = "+firstNum+" ; lastnum = "+lastNum+" ; type = "+type+" ; category = "+category+" ; author = "+author);
    
   $.ajax({url: 'wp-content/plugins/Apocrypha_plugin/item.php',
       type:'post',
       data:{info: 'register_item',
             name:name,
             firstNum:firstNum,
             lastNum:lastNum,
             type:type,
             category:category,
             author:author},
       success:function(output){
           console.log(output);
       }
   });
}

function update_item(){
    
}

function delete_item(){
    
}

