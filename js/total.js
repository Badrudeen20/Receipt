var golbel
     
function text(val){
  golbel = val
}
function add(){
      var field  = prompt('Enter Field')
        var field = $(`<div class="detail">
          <input type="text" onchange="text(this.value)"  class="form-control"   placeholder="${field}" required/>
          <input type="text" class="form-control newmonth" />
          <input type="text" class="form-control newtotal amt" />
       </div>`)
        $('.col').append(field)
        $('.newmonth').each(function(index,ele){
          ele.addEventListener('keyup',function(e){
             var total = golbel * e.target.value
             if(golbel){
              var tol = $('.total')
              ele.nextSibling.nextSibling.value = total
             }else{
                alert('enter amount')
                e.target.value = ""
             }
            })
        })

}
   $('.month').each(function(index,ele){
      
       ele.addEventListener('keyup',function(e){
          var total = golbel * e.target.value
             if(golbel){
              var tol = $('.total')
              ele.nextSibling.nextSibling.value = total
             }else{
                alert('enter amount')
                e.target.value = ""
             }
   })
})
 function amount(){
   var array = [];
    
    $('.amt').each(function(ind,ele){
        var num =   parseInt(ele.value);
        array.push(num)
    })

     console.log(array)
    
    // Getting sum of numbers
    var sum = array.reduce(function(a, b){
        return a + b;
    }, 0);
    
    $('#totalamount').val(sum)
    
 }


