<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Paytone One' rel='stylesheet'> -->
    <link rel="stylesheet" href="CSS/welcome.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Paytone One' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <style>
        .head{
            font-size: 60px;
            text-align: center;
            font-family: 'Paytone One';
            margin-top:60px;
            text-shadow: .1em .1em 0 hsl(200 50% 30%);
            box-shadow: rgb(49, 91, 136) 0px 20px 30px -10px;

            box-sizing: border-box;
            margin: 0;
            block-size: 100%;
            background: hsl(200 50% 50%);
            color: hsl(200 50% 90%);
            font-size: 2.5rem;
            color: white;
            min-block-size: 100%;
            font-family: 'Fugaz One', cursive;

            display: grid;
            place-content: center;
            padding: 5vmin;
        }


        .my-5{
            /* margin-left:490px; */
            text-align: center;
            font-weight: bolder;
            font-size: 40px;
            margin-top: 20px;
        }

        body{
            border: 20px rgb(131, 136, 131);
            /* position:absolute; */
            /* background-image: linear-gradient(to bottom, #051937, #004d7a, #008793, #4e93a6, #c059b6);    border: 20px solid rgb(242, 255, 0); */
            background-color: #12ADC1;
            background-image: linear-gradient(160deg, #191b50 9%, #1b0807 50%);
            border-radius: 23px;
            box-shadow: 0px 0px 30px 30px rgba(48, 56, 58, 0.5);
        }


        #img_head{
            margin-top: 100px;
            margin-left: 491px;
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 10px;
        }

        #username_head{
            color: rgb(12, 250, 12);
        }

        #img_head:hover{
            box-shadow: rgb(25, 215, 11) 0px 54px 55px, rgba(2, 154, 255, 0.95) 0px -12px 30px, rgb(255, 9, 255) 0px 4px 6px, rgba(238, 7, 7, 0.972) 0px 12px 13px, rgb(61, 8, 252) 0px -3px 5px;
            cursor: pointer;
        }

        /* #reset-signout{
            margin-top: 20px;
        } */

        .my-5{ 
            font-family: 'Fugaz One', cursive;
            text-align: center;
            color: whitesmoke;
        }
        
        #reset_signout{
            margin-top:30px;
        }

        #reset{
            font-family: 'Fugaz One', cursive;
            font-size: 20px;
            height: 23px;
            color: blue;
            text-align: center;
            margin-left:480px;
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 8px;
            background-color: #c2fbd7;
            border-radius: 100px;
            box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
            color: green;
            cursor: pointer;
            display: inline-block;
            font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        #reset:hover{
            box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }

        #signout{
            font-family: 'Fugaz One', cursive;
            font-size: 20px;
            color: blue;
            text-align: center;
            margin-left:80px;
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 8px;
            background-color: #c2fbd7;
            border-radius: 100px;
            box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
            color: green;
            cursor: pointer;
            display: inline-block;
            font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }
        
        #signout:hover{
            box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
            transform: scale(1.05) rotate(1deg);
        }

        .know_about_places_head{
            color:whitesmoke;
        }

        /* .places_head{
            text-align: center;
            margin-top: 150px;
            /* box-shadow: rgba(10, 125, 239, 0.918) 0px 8px 24px; */
            /* font-size: 25px;
            font-family: "Bodoni MT Black"; */
        /* } */ 

        .know_about_places_head{
            text-align: center;
            margin-top: 150px;
            margin-right: 30px;
            /* box-shadow: rgba(10, 125, 239, 0.918) 0px 8px 24px; */
            font-size: 50px;
            font-family: "Bodoni MT Black";
        }

        #diet{
            color: rgb(12, 250, 12);
        } 
        
        
        .content1{
            display: flex;
            width:350px;
            scroll-snap-type: x mandatory;
            scroll-padding:25px;
            column-gap: 20px;
            margin-left: 39px;
            margin-top:80px;
            font-family: "Comic Sans MS";
            color: whitesmoke;
        }


        .card1{
            flex: 0 0 60%;
            padding:30px;
            scroll-snap-align:start;
            border-radius:30px;
        }





        #restaurant{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #restaurant:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }


        #shopping{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #shopping:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }

        #coffee{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #coffee:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }

        #resorts{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #resorts:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }

        #theaters{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);   
        }


        #theaters:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }


        #gym{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #gym:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }    
        
        #monuments{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #monuments:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }

        #parks{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #parks:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }

        #malls{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #malls:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }

        #temples{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #temples:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }

        #stadiums{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #stadiums:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }

        #museum{
            box-shadow: rgba(17, 49, 104, 0.969) 0px 5px 15px;
            background-color: rgba(17, 49, 104, 0.969);
        }

        #museum:hover{
            box-shadow: rgba(6, 255, 60, 0.963) 0px -23px 25px 0px inset, rgba(6, 255, 60, 0.963) 0px -36px 30px 0px inset, rgba(6, 255, 60, 0.963) 0px -79px 40px 0px inset, rgba(6, 255, 60, 0.963) 0px 2px 1px, rgba(6, 255, 60, 0.963) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgb(209, 48, 223) 0px 20px 8px, rgba(209, 48, 223) 0px 0px 16px;
            cursor: pointer;
            color: rgb(236, 12, 64);
        }


        #img_restaurant{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;
        }

        .content1 img{
            border-radius: 50px;
        }

        #img_restaurant:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }

        .content1 h1{
            text-align: center;
        }

        #img_shopping{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;
        }

        #img_shopping:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }

        #img_coffee{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;
        }

        #img_coffee:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }

        #img_resorts{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;
        }

        #img_resorts:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }

        #img_gym{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;   
        }

        #img_gym:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }

        #img_theaters{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;
        }

        #img_theaters:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;   
        }


        #img_monuments{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;
        }

        #img_monuments:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;   
        }


        #img_parks{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;
        }

        #img_parks:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }
        

        #img_malls{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;
        }

        #img_malls:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }
        
        #img_temples{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;   
        }

        #img_temples:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }


        #img_stadiums{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px; 
        }

        #img_stadiums:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }


        #img_museum{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            width: 150px;
            height: 115px;
            margin-left: 30px;
            border-radius: 100px;
        }

        #img_museum:hover{
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 20px;
        }

        .container{
            margin-top: 70px;
            margin-left:90px;
            width: 1240px;
            height: 350px;
            overflow-x: scroll;
            overflow-y: hidden;
            background-color:#1C2A44;
            padding:2%;
            border-radius: 25px;
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
        }

        .img-container{
            display: flex;
            flex-direction: row;
            /* border-radius: 20px; */
        }

        .container img{
            margin-top:20px;
            width: 400px;
            height: 300px;
            box-shadow: 0px 0px 15px black;
            margin-right: 50px;
            border-radius: 20px;
            /* margin-left:00px; */
            /* margin-left: -100px; */
        }

        .container img:hover{
            box-shadow: rgb(223, 6, 235) 0px 54px 55px, rgb(48, 255, 2) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(252, 8, 8) 0px -3px 5px;
        }

        .container .know_about_places_head{
            font-size: 30px;
            margin-top:150px;
            margin-left:10px;
        }


        .know_about_places_head p{
            font-size:24px;
        }

        /* .last_tourist_img{
            margin-right: 30px;
        } */
        
        .p{
            margin-left: 30px;
            color:#1C2A44;
        }



        ul{
    margin-bottom: 500px;
    position:absolute;
    transform: translate(-50%,-50%);
    padding: 1;
    display: flex;
    margin-left:50px;
}

ul li{
    list-style: none;
}


ul li a{
    position:relative;
    width:60px;
    height:60px;
    display:block;
    text-align:center;
    margin:0 10px;
    border-radius:50%;
    padding: 6px;
    box-sizing: border-box;
    text-decoration:none;
    box-shadow: 0 8px 15px rgb(29, 253, 4);
    background:linear-gradient(0deg, #ddd, #fff);
    transition: .5s;
}


ul li a:hover{
    box-shadow:0 2px 5px rgba(0, 0, 0, 0.882);
    text-decoration:none;
}

ul li a .fab{
    width: 100%;
    height: 100%;
    display:block;
    background: linear-gradient(0deg, #fff,#ddd);
    border-radius:50%;
    line-height:calc(60px - 12px);
    font-size: 24px;
    color: #d90707f8;
    transition: .5s;
}

div.socialMedia{
    /* margin-bottom: 100px; */
    padding: 1em;
    margin-left: 1100px;
    font-size: 100px;
}

div.socialMedia i:hover{
    color:#12ea15;
}

i.fab.fa-facebook-f{
    color:#4267B2;
}

i.fab.fa-facebook-f::before{
    font-size:30px;
}

/* i.fab.fa-facebook-f:hover{
    color:#12ea15;
} */

i.fab.fa-twitter{
    color:#0093E9;
}

i.fab.fa-twitter::before{
    font-size:30px;
}

i.fab.fa-google-plus-g:hover{
    font-size:30px;
    /* color:#12ea15; */
}

i.fab.fa-google-plus-g{
    /* border-top: 10px solid #EA4335;
    border-right: 10px solid #4285F4;
    border-bottom: 10px solid #34A853;
    border-left: 10px solid #FBBC05; */
    background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    -webkit-text-fill-color: transparent;
    /* color: #2a72ee; */
    font-size: 30px;
}

i.fab.fa-instagram{
    color: #f20d7c;
}
i.fab.fa-instagram::before{
    font-size:30px;   
}

/* 
.socialMedia{
    margin-bottom: 60px;
    background: #dedede;
} */

i.fab.fa-github{
    color: black;
    /* font-size: 20px; */
}

i.fab.fa-github::before{
    font-size:30px;
}

    </style>
</head>
<body>

    <div class="head">
        <head>HELP  ME OUT  IN  HYDERABAD</head>
    </div>
    <h1 class="my-5">Hi, <b id="username_head"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p id="reset-signout">
        <a href="reset-password.php" class="btn btn-warning" role="button" id="reset"> <span> Reset Your Password </span></a>
        <a href="logout.php" id="signout"  role="button" class="btn btn-danger ml-3"> <span> Sign Out of Your Account </span> </a>
    </p>

    <div class="heading_img">
        <img src="https://tse2.mm.bing.net/th?id=OIP.cVhh2Q0e7np1J7J0oFAn0AHaG0&pid=Api&P=0"  alt="Here is a image"  id="img_head">
    </div>
        
    <div class="know_about_places">
        <div class="know_about_places_head">
        <head class="places_head">Know about places in <i id="diet"> Hyderabad </i> </head>
        </div>  
    </div>

    <div class="content1">
            <article class="card1" id="restaurant" onclick="window.location.href='restaurant.html'">
                <img src="https://thumbs.dreamstime.com/b/restaurant-cafe-exterior-building-vector-cartoon-illustration-landscape-nature-trees-food-drink-87423840.jpg"  id="img_restaurant" alt="">
                <h1>Restaurant</h1>
                <span>
                </span>
            </article>
            <article class="card1" id="shopping" onclick="window.location.href='shopping.html'">
                <img src="https://i.pinimg.com/originals/48/c8/b4/48c8b4eaac2a55362b524278a635943f.gif" id="img_shopping" alt="">
                <h1>Shopping</h1>
                <span>
                </span>
            </article> 
            <article class="card1" id="coffee" onclick="window.location.href='coffee.html'">
                <img src="https://i.pinimg.com/originals/29/66/0a/29660ad04efae746f86f52acde412850.gif" alt="" id="img_coffee">
                <h1>Coffee</h1>
                <span>
                </span>
            </article> 
            <article class="card1" id="resorts" onclick="window.location.href='resorts.html'">
                <img src="https://previews.123rf.com/images/rastudio/rastudio1611/rastudio161100388/65118093-hand-drawn-cartoon-of-summer-sea-landscape-background-of-beach-resort-colourful-cartoon-of-backgroun.jpg" alt="" id="img_resorts">
                <h1>Resorts</h1>
                <span>
                </span>
            </article>
            <article class="card1" id="gym" onclick="window.location.href='gym.html'">
                <img src="https://i.pinimg.com/originals/a2/c2/1c/a2c21cddcdffd7eb6c8259c06636299e.gif" alt="" id="img_gym">
                <h1>Gym</h1>
                <span>
                </span>
            </article> 
    </div>

    <div class="content1">
            <article class="card1" id="theaters" onclick="window.location.href='theaters.html'">
                <img src="https://cdn.dribbble.com/users/1522421/screenshots/6751055/globalgraphic_animation.gif" alt="" id="img_theaters">
                <h1>Theaters</h1>
                <span>
                </span>
            </article>


            <article class="card1" id="monuments" onclick="window.location.href='monuments.html'">
                <img src="https://cdn.dribbble.com/users/458522/screenshots/3038438/landmarks_gif_dribbble.gif" alt="" id="img_monuments">
                <h1>Monuments</h1>
                <span>
                </span>
            </article>



            <article class="card1" id="parks" onclick="window.location.href='parks.html'">
                <img src="https://cdn.dribbble.com/users/1431602/screenshots/5555968/theme-park.gif" alt="" id="img_parks">
                <h1>Parks</h1>
                <span>
                </span>
            </article>


            <article class="card1" id="malls" onclick="window.location.href='malls.html'">
                <img src="https://therealdeal.com/wp-content/uploads/2020/10/10920-malls-1.gif" alt="" id="img_malls">
                <h1>Malls</h1>
                <span>
                </span>
            </article>


            <article class="card1" id="temples" onclick="window.location.href='temples.html'">
                <img src="https://i.pinimg.com/originals/18/92/39/189239af6fa35718fdfba4b172abeae2.gif" alt="" id="img_temples">
                <h1>Temples</h1>
                <span>
                </span>
            </article>
    </div>

    <div class="content1">
            <article class="card1" id="stadiums" onclick="window.location.href='stadiums.html'">
                <img src="https://i.pinimg.com/originals/a3/e2/4a/a3e24a7b34631b4c71308c13c5d77bc9.gif" alt="" id="img_stadiums">
                <h1>Stadiums</h1>
                <span>
                </span>
            </article>

            <article class="card1" id="museum" onclick="window.location.href='museum.html'">
                <img src="https://st3.depositphotos.com/23613136/36431/v/600/depositphotos_364312012-stock-illustration-museum-building-with-title-columns.jpg" alt="" id="img_museum">
                <h1>Museum</h1>
                <span>
                </span>
            </article>
    </div>
    <div class="know_about_places_head">
        <head class="places_head">Best tourist places in <i id="diet"> Hyderabad </i> </head>
        <p>Click on the image for <b id="diet">location!</b></p>
    </div>
    <div class="container">
        <div class="img-container">
            <p class="know_about_places_head">1.<i id="diet"> Charminar:</i></p>
            <a href="https://maps.google.com/maps/search/Charminar/@17.361554582179913,78.4746766090393,17z?hl=en"><img src="https://wallpapercave.com/wp/wp6539229.jpg"></a>

            <p class="know_about_places_head">2.<i id="diet"> Birla Mandir:</i></p>
            <a href="https://maps.google.com/maps/search/Birla%20Mandir/@17.40594787786277,78.48588043255779,17z?hl=en"><img src="https://hyderabadzone.com/wp-content/uploads/2019/09/Birla-Mandir-Temple-Hyderabad-650x488.jpg"   alt=""></a>

            <p class="know_about_places_head">3.<i id="diet"> Golconda Fort:</i></p>
            <a href="https://maps.google.com/maps/search/Golconda%20Fort/@17.383858363285963,78.40326956582726,17z?hl=en"><img src="https://assets-news.housing.com/news/wp-content/uploads/2020/11/02184143/Everything-you-need-to-know-about-Golconda-Fort-FB-1200x700-compressed.jpg" alt=""></a>

            <p class="know_about_places_head">4.<i id="diet"> Lumbini Park:</i></p>
            <a href="https://maps.google.com/maps/search/Lumbini%20Park/@17.4093073484274,78.47243883332077,17z?hl=en"><img src="https://lh3.googleusercontent.com/p/AF1QipPz5TtpJl76D3doKkG495kFclsQafL_EyKFuY4N=s1600-w1600" alt=""></a>

            <p class="know_about_places_head">5.<i id="diet"> Hussain Sagar Lake:</i></p>
            <a href="https://maps.google.com/maps/search/Hussain%20Sagar/@17.414149851025012,78.4692252407226,17z?hl=en"><img src="https://images.hindustantimes.com/rf/image_size_800x600/HT/p2/2015/12/23/Pictures/_e48cf168-a94e-11e5-bc4d-302034fae57a.jpg" alt=""></a>

            <p class="know_about_places_head">6.<i id="diet"> Jala Vihar:</i></p>
            <a href="https://maps.google.com/maps/search/jala%20vihar/@17.42364438242952,78.49336078610037,17z?hl=en"><img class="last_tourist_img" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/39/b2/6c.jpg" alt=""></a>

            <p class="know_about_places_head">7.<i id="diet"> Chowmahalla Palace:</i></p>
            <a href="https://maps.google.com/maps/search/Chow%20Mahalla%20Palace/@17.358068,78.47175,17z?hl=en"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Chowmahalla_palace_hyderabad.jpg/1280px-Chowmahalla_palace_hyderabad.jpg" alt=""></a>

            <p class="know_about_places_head">8. <i id="diet"> Qutub Shahi Tombs:</i></p>
            <a href="https://maps.google.com/maps/search/Qutub%20Shahi%20Tombs/@17.394737419659307,78.40991939257547,17z?hl=en"><img src="http://exploretelangana.com/wp-content/uploads/2013/06/Qutub-Shahi-Tombs-Hyderabad.jpg" alt=""></a>

            <p class="know_about_places_head">9. <i id="diet"> Salar Jung Museum:</i></p>
            <a href="https://maps.google.com/maps/search/Salarjung%20Museum/@17.371527369500857,78.47828298328822,17z?hl=en"><img src="https://d5xydlzdo08s0.cloudfront.net/media/celebrities/15813/products/edited_4__L.jpg" alt=""></a>

            <p class="know_about_places_head">10. <i id="diet"> Purani Haveli:</i></p>
            <a href="https://maps.google.com/maps/search/Purani%20Haveli/@17.367318839202387,78.48272830903522,17z?hl=en"><img src="https://www.indiatourismguide.in/wp-content/uploads/2017/11/Purani-Haveli.jpg" alt=""></a>

            <p class="know_about_places_head">11. <i id="diet"> Tank Bund:</i></p>
            <a href="https://maps.google.com/maps/search/Tank%20Bund/@17.409018596636187,78.47739500486313,17z?hl=en"><img src="https://www.thenewsminute.com/sites/default/files/images/Hyderabad_TankBund_230121_2_650.jpg" alt=""></a>

            <p class="know_about_places_head">12. <i id="diet"> Birla Planetarium:</i></p>
            <a href="https://maps.google.com/maps/search/Birla%20Planetorium/@17.40361726291191,78.46963041427479,17z?hl=en"><img src="https://www.connectingtraveller.com/images/localtip/1631186937images%20(41).jpeg" alt=""></a>
            <p class="p">K AMITH</p>
        </div>
    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="socialMedia">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://github.com/k-amith1610/HELP-ME-OUT-IN-HYDERABAD"><i class="fab fa-github"></i></a></li>
        </ul>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>