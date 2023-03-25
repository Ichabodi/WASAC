<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
<style>
body 
{
    background: #ccc;
}
    form{
    background: #fff;
    padding: 30px;
    margin-top: 30px;
}  
    </style>
    </head>
    <body>

    <div class="container">
     <div class="row">
    <form action="" name="frm" method="post">
        <select class="courses-section">
            <div class="col-md-4">
                <label for="country">country</label>
            <select type="text" name="country" id="country" class="form-control">
                <option>select country</option>
             </select>
            </div>

            <div class="col-md-4">
                <label for="state">states</label>
            <select type="text" name="state" id="state" class="form-control">
             </select>
            </div>
            
            <div class="col-md-4">
                <label for="city">city</label>
            <select type="text" name="city" id="city" class="form-control">
             </select>
            </div>
        </select>
    </form>
     </div>



     <script type="text/javascript">
        $(document).ready(function(){

            $("#country").change(function(){
                loadState($(this).find(":selected").val())})

            $("#state").change(function(){
                loadCity($(this).find(":selected").val())})
        });

        function loadcountry(){
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "get=country"
            }).done(function(result){
                $(result).each(function(){$("#country").append($(result));})
            });
        }
        function loadState(countryId){
            $("#state").children().remove()
            $.ajax({
                type:"POST",
                url: "ajax.php",
                data: "get=state&countryId=" + countryId
            }) .done(function(result) {
                $("#state") .append($(result));
            });
        }
        function loadcity(stateId){
            $("#city").children().remove()
            $.ajax({
                type:"POST",
                url: "ajax.php",
                data: "get=city&stateId=" + stateId
            }) .done(function(result) {
                $("#city") .append($(result));
            });
        }
        //init the countries
        loadcountry();
        </script>
    </body>
</html>