<div class="container my-2">
    <!-- ALL Users -->
    <div class="updateModelContainer">
        <div class="updateModel">
            <div class="container d-flex flex-row justify-content-between">
                <h2>Update User</h2>
                <button class="btn-danger" style="padding: 0px 10px;" id='closeUpdateModal'>x</button>
            </div>


            <label for="">
                <input class="form-control" id="upid" type="text" disabled hidden>
            </label>
            <br>
            <label for="">
                <input class="form-control" id="upname" type="text">
            </label>

            <br><br>

            <label for="">
                <input class="form-control" id="upemail" type="text">
            </label>

            <br><br>

            <label for="">
                <button class="btn btn-outline-success p-2" id="upbtn" data-id="">Update</button>
            </label>
        </div>
    </div>

    <div class="container userdatacontainer">

        <table class="container allUserTable" id="allUserTable">
            <!-- <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Operation</th>
        </thead>
        <?php
            foreach ($users as $key => $value) {
                echo user_container($value['id'],$value['name'],$value['email'],dateChanger($value['created_at']),dateChanger($value['updated_at']));
            }
        ?> -->
    </table>


    </div>    
</div>

<script>
    $(document).ready(function () {
        
        function load_data(){
            $.get(url+"get_all_users", {},
                function (data, textStatus, jqXHR) {
                    // alert(data)
                    for (const iterator of data) {
                        let content = "<tr><td>"+iterator.id+"</td><td>"+iterator.name+"</td><td>"+iterator.email+"</td><td>"+iterator.created_at+"</td><td>"+iterator.updated_at+"</td><td><button class='btn btn-outline-success' id='updateBtn' data-id='"+iterator.id+"' >Update</button></td> <td><button class='btn btn-outline-danger' id='deleteBtn' data-id='"+iterator.id+"'>Delete</button></td> </tr>"
                        // console.log(iterator)
                        $('#allUserTable').append(content)
                    }
                },
                "json"
            );
        }
        load_data()

        // Delete User
        $("table").on("click","#deleteBtn", function () {

            event.preventDefault()
            let val = $(this).data('id')
            let con =  confirm("Delete this user?")
            let thisTr = $(this).parent().parent()
            // console.log(thisTr)

            if(con){
                $.get(url+"delete_user/"+val, {},
                function (data, textStatus, jqXHR) {
                    // alert(data)
                    thisTr.remove()                        
                    }
                );
            }
        });

        let thisTr;
        $("table").on('click','#updateBtn', function () {
            event.preventDefault()
            let val = $(this).data('id')
            thisTr = $(this).parent().parent()
            // let thisTr = $(this).parent().parent().children().eq(1).html()

            


            
            
            
            
            let id = $(this).closest('tr').children().eq(0).html()
            let name = $(this).closest('tr').children().eq(1).html()
            let email = $(this).closest('tr').children().eq(2).html()
            
            
            $("#upbtn").attr('data',id)
            $("#upid").val(id);
            $("#upname").val(name);
            $("#upemail").val(email);
            $(".updateModelContainer").show()
            

            
        });


        // Modal        
        
        //update btn 
        $("#upbtn").on("click", function () {
                      
          let id = $("#upid").val();
          let name = $("#upname").val();
          let email = $("#upemail").val();

          

          
          if(id.length > 0){
              $.get(url+"update_user", {'id':id,'name':name,'email':email},
              function (data, textStatus, jqXHR) {

                  alert(data)

                  if(textStatus == 'success'){
                    // $.get(url+"getone/"+id, {},
                    //     function (data, textStatus, jqXHR) {
                    //         // console.log(data)
                    //         // alert(data)
                    //         query = data
                    //     },
                    //     "json"
                    // );
                    thisTr.children().eq(1).html(name)
                    thisTr.children().eq(2).html(email)

                    $(".updateModelContainer").hide()

                  }



                }
            );
        }

        });

        // close btn 
        $("#closeUpdateModal").on('click',function(){
          $(".updateModelContainer").hide()
        })

    });
</script>