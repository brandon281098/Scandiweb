<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="Styles.css"  rel="stylesheet" >
    <script>
     
 $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="CD"){
                    $(".box").hide();
                    $(".CD").show();
                    
                }
                if($(this).attr("value")=="Books"){
                    $(".box").hide();
                    $(".Books").show();
                    ;
                }
                if($(this).attr("value")=="Furniture"){
                    $(".box").hide();
                    $(".Furniture").show();
                }
                if($(this).attr("value")=="choose"){
                    $(".box").hide();
                    $(".choose").show();
                    
                }
            });
        }).change();
    });
//     let submit = document.querySelector('submit');
//     let inputs = document.querySelectorAll('input');

//     submit.addEventListener('click',()=>{

// input.foreach(input => input.value ="");

//     });



    </script>
    <title>Document</title>
</head>
<body>
        <div class="body">  
        <form id="addDetails" method="POST" action="formEntry1.php">
        <header class="p-3 header text-white">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  
                  <h4 style="color: white;">Product Add</h4>
                </a>
        
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  
                </ul>
        
                
        
                <div class="text-end">
                  <button type="submit" id="submit" class="btn btn-outline-light me-2" name="btn1">Save</button>
                  <button  type="button" class="btn btn-danger"><a href="index.php">Cancel</a></button>
                </div>
              </div>
            </div>
          </header>
        <br>
        <div style='color:white' class="hr__line-break"><hr /></div>
        <br>
        <h6 style='color:white'>Enter the SKU Prefix AS Follows JVC(id) for movies, GGWP(id) for Books, TR(id) for Furniture </h6> 
            <div class="formEntry">
            <div class="Entry row">
            
                <label class="col" for="fnameSKU">SKU:</label>
                <input class="col" type="text" id="id" name="id" required><br>   
            </div>
            <div class="Entry row"> 
                <label class="col" for="fnameSKU">Name:</label>
                <input class="col" type="text" id="name" name="name" required><br>  
            </div>
            <div class="Entry row"> 
                <label class="col" for="fnameSKU">Price($):</label>
                <input class="col" type="text" id="price" name="price" required><br>
            </div>
            <br>
                <div class="Entry" id="type">
                    <select name="type">
                        <option value="choose">Choose Options</option>
                        <option value="CD">CD</option>
                        <option value="Books">Books</option>
                        <option value="Furniture">Furniture</option>     
                    </select>
                </div>

                <div style="color: white;" class="choose box"><strong>Select any one option</strong></div>
                <div class="CD box">
                    <h3 style="color: white;">Please Provide the Size of the product</h3>
                    <br>
                    <label style="color: white;" for="fname">Size(MB):</label><br>
                    <input type="text" id="size" name="size"><br>
                </div>
                <div class="Books box">
                    <h3 style="color: white;">Please Provide the weight of the product</h3>
                    <br>
                    <label style="color: white;" for="fname">Weight(KG):</label><br>
                    <input type="text" id="weight" name="weight"><br>
                </div>
                <div class="Furniture box">
                    <h3 style="color: white;">Please Provide the Dimensions of the product</h3>
                    <br>
                    <label style="color: white;" for="fname">Height(cm):</label><br>
                    <input type="text" id="height" name="height"><br><br>
                    <label style="color: white;" for="fname">Width(cm):</label><br>
                    <input type="text" id="width" name="width"><br><br>
                    <label style="color: white;"  for="fname">Length(cm):</label><br>
                    <input type="text" id="length" name="length"><br><br>
                </div>
                <br>
                <br>
                
            </div>
    </form>
    </div>
   
</body>
</html>



