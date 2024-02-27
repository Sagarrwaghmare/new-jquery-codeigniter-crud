<!-- <footer>Footer</footer> -->
    <script src="<?php echo base_url('assets/bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/jquery.js');?>"></script>


    <script>
      $(document).ready(function(){

        $("#allUserTable").html("Loading")
        //load all
        function load_all(){
          // $("#allUserTable").html("Loading...")
          
          let inhtml = "<thead> <th>ID</th><th>Name</th><th>Email</th><th>Created</th><th>Updated</th><th>Operation</th></thead>"

          
          $("#allUserTable").html(inhtml)
  
          $.ajax({
            url: "http://localhost/main/CollegeProjects/content-ms/user/get_all_users",
            dataType:'json',
            success: function (response) {
  
              
              // console.log(response.length)
              
              for (const iterator of response) {

                // inhtml+=
                  let content = "<tr><td>"+iterator.id+"</td><td>"+iterator.name+"</td><td>"+iterator.email+"</td><td>"+iterator.created_at+"</td><td>"+iterator.updated_at+"</td><td><button class='btn btn-outline-success' id='updateBtn' data-id='"+iterator.id+"' >Update</button></td> <td><button class='btn btn-outline-danger' id='deleteBtn' data-id='"+iterator.id+"'>Delete</button></td> </tr>"
                // console.log(iterator)

                $('#allUserTable').append(content)

              }
              
              // $("#allUserTable").html(inhtml) 
            }
          });

          // console.log(
          //   $("#allUserTable").height(10  ) 
          // )
        }
        load_all()

        // $(".updateModelContainer").hide()
        
        

        //add
        $('#adduserjs').on('click',function(event){
          event.preventDefault()

          let name = $("#addusername").val()
          let email = $("#adduseremail").val()

          $.ajax({
            type: "POST",
            url: "http://localhost/main/CollegeProjects/content-ms/user/add_user",
            data: {'name':name,'email':email},
            success: function (response) {
              console.log("Added")
            }
          });
          load_all()
          // load_all()
        })
        
        
        //delete 
        $("table").delegate('#deleteBtn','click',function(){ //works
          event.preventDefault()
          let val = $(this).data('id')
          let con =  confirm("Delete this user?")
          if(con){
            $.ajax({
              url: "http://localhost/main/CollegeProjects/content-ms/user/delete_user/"+val,
              success: function (response) {
                // alert(response)              
                console.log("Deleted")
              }
            });
            load_all()
            // load_all()
          }

        })
        
        $("table").delegate('#updateBtn','click',function(){ //works
          let id = $(this).closest('tr').children().eq(0).html()
          let name = $(this).closest('tr').children().eq(1).html()
          let email = $(this).closest('tr').children().eq(2).html()


          $(".updateModelContainer").show(1)
          

          $("#upbtn").attr('data',id)
          $("#upid").val(id);
          $("#upname").val(name);
          $("#upemail").val(email);
          // alert("update"+$(this).data('id'))
        })

        $("#upbtn").on('click',function(){
          
          let id = $("#upid").val();
          let name = $("#upname").val();
          let email = $("#upemail").val();

          
          
          if(id.length > 0){
            $.ajax({
              method:"GET",
              url: "http://localhost/main/CollegeProjects/content-ms/user/update_user/",
              data:{"id":id,"name":name,"email":email},
              success: function (response) {
                alert(response)                
                $(".updateModelContainer").hide()
              }
            });
          }
          load_all()
          // load_all()
        })

        $("#closeUpdateModal").on('click',function(){
          $(".updateModelContainer").hide()
        })




      });
    </script>

</body>
</html>