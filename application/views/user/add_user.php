<div class="container">
    <h4>Add User</h4>
    <!-- <form action="<?php echo base_url('user/add_user');?>" method="post" class="container" id="adduserform"> -->
    <form action="" method="post" class="container" id="adduserform">
        <label for="">
            <input type="text" name="name" id="addusername"  class="form-control" placeholder="Enter Name">
        </label>
        <label for="">
            <input type="text" name="email" id="adduseremail"  class="form-control" placeholder="Enter Email">
        </label>
        <label for="">
            <!-- <input type="submit" class="btn btn-outline-primary p-2 form-control" value="ADD USER"> -->
        </label>

        <label for="">
            <button class="btn btn-outline-danger p-2" id="adduserbtn">Add User</button>
        </label>
    </form>
</div>


<script>
$(document).ready(function () {

    $("#adduserbtn").click(function (e) { 
        e.preventDefault();

        let name = $("#addusername").val()
        let email = $("#adduseremail").val()

        // alert(name+email)    

        let dataAdded = false

        // SUBMIT DATA TO DB
        $.post(url+"add_user", {'name':name,'email':email},
            function (data, textStatus, jqXHR) {
                alert(data)
                if(textStatus == "success"){
                    dataAdded = true
                }

                // CHECK IF DATA WAS ADDED
                if(dataAdded){
                    // GET LATEST ENTRY ie NEWLY ENTERED DATA
                    $.get(url+"get_last", {},
                        function (data, textStatus, jqXHR) {
                            // console.log(data[0].id)
                            let iterator = data[0]

                            let content = "<tr><td>"+iterator.id+"</td><td>"+iterator.name+"</td><td>"+iterator.email+"</td><td>"+iterator.created_at+"</td><td>"+iterator.updated_at+"</td><td><button class='btn btn-outline-success' id='updateBtn' data-id='"+iterator.id+"' >Update</button></td> <td><button class='btn btn-outline-danger' id='deleteBtn' data-id='"+iterator.id+"'>Delete</button></td> </tr>"
                            $('#allUserTable').append(content)
                        },
                        "json"
                    );                  
                }
        }
        )
        // User Added





    });
});
</script>
