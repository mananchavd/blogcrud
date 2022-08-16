<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
    <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <style>
    .box{
        margin-left:40em;
        justify-content:center; 
        margin-top:40px;
        word-spacing: 5em;
        position:relative;
    }
    .button{
        margin-left:150px;
    }
    .register{
    font-family:cursive;
    font-style: italic;
    font-weight:bold; 
    font-variant: small-caps;
    font-size: 20px;  
    display: flex;
    margin-bottom:10px;
    margin-left:35em;
    height:80px;
   }
   body{
       background-color:;
   } 
    </style>
</head>
<body>
<div class="register">
            <h1>Register</h1>  
            </div>
    <div class="box">
            
            <form action="{{ route('precon.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
                        <div class="form-row col-xs-5">
                            <div class="form-group col-xs-12">
                                <select name="category" id="inputState" class="form-control">
                                    <option selected>select incident / category</option>
                                    <option>public strike</option>
                                    <option>restriction</option>
                                </select><br>
                                
                                <div class="form-group col-xs-12">
                                <select name="incident_type" id="inputState" class="form-control">
                                    <option selected>incident type</option>
                                    <option>road construction</option>
                                    <option>bridge construction</option>
                                </select>
                            </div>
            
                            <div class="col">
                            <input type="text" class="form-control" name="incident_description" placeholder="incident description">
                            </div><br>

                            <div class="col">
                            <input type="date" class="form-control" name="date" placeholder="date/time">
                            </div><br>

                            <div class="col">
                            <input type="text" class="form-control" name="nearmiss_description" placeholder="nearmiss description">
                            </div><br>

                            <div class="col">
                            <input type="number" class="form-control" name="person_involved" placeholder="person involved">
                            </div><br>

                            <div class="col">
                            <input type="text" class="form-control" name="root_cause_analysis" placeholder="root cause analysis">
                            </div><br>

                            <div class="col">
                            <input type="text" class="form-control" name="location" placeholder="location">
                            </div><br>

                            <div class="col">
                            <input type="text" class="form-control" name="measures_taken" placeholder="measures taken">
                            </div><br>

                            <div class="col">
                            <input type="text" class="form-control" name="witnesses" placeholder="witnesses">
                            </div><br>

                            <div class="col">
                                <textarea placeholder="comments" name="comments" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div><br>

                            <div class="col">
                            <input type="file" name="supporting_documents" class="form-control" placeholder="supporting_documents">
                            </div><br>

                            <div class="col">
                            <input type="text" name="status" class="form-control" placeholder="status">
                            </div><br>

                            <div class="button">
                            <button type="submit" name="submit" value="submit" class="btn btn-outline-primary">submit</button>
                            </div>
                        </div>
            </form>
    </div>
</body>
</html>