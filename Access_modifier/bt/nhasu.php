 <?php
   class Employee {
       
   } 
    ?>
        <div>
            <label>Add New</label>
            <input type="text" name="addNew" id="addNew">
            <button onclick="add()">submit</button>
      </div>
<br>
<br>
<table class="table" width=200 px;  cellspacing="" id="show">
    <thead>
    <tr>
        <th>them moi</th>
        <th>action</th>
    </tr>
</thead>
</table>
<div id="edit"></div>

<script>
      let product_arr =[]
    function add() {   
        var item_addNew = document.getElementById("addNew").value;       
        product_arr.push(item_addNew);      
        show_product(); 
        
     
    }
    function show_product() {
        let table='<table class="table" width=200 px;  cellspacing="" id="show"></thead><tr>  <th>them moi</th> <th>action</th></tr></thead><tbody>'
        for (let i = 0; i <product_arr.length; i++) {
         table += '<tr>'
            table += '<td>'+product_arr[i]+'</td>'
            table += '<td> <button onclick="doclear('+i+');">delete</button></td>'
            table += '<td> <button onclick="edit('+i+');">edit</button></td>'
        table += '</tr>'
        }
    table+='</tbody></table>'
    document.getElementById("show").innerHTML =table;
    }
    function edit(index){
      let s='<input type="text" name="" id="save1" value="'+product_arr[index]+'"> <button onclick="save2('+index+')">save</button>'
      document.getElementById("edit").innerHTML = s;
    } 
    function save2(index) {
        product_arr[index] = document.getElementById('save1').value;
        // mat input save
        document.getElementById('edit').innerHTML='';
        show_product();
        
    }
    function doclear(index){
        console.log(index)
            product_arr.splice(index, 1);
            alert("muon xoa hay k");
            show_product();
        
    }
  
</script>