<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <div class="container">
        <div class="background">
            <svg preserveAspectRatio="xMidYMid slice" viewBox="10 10 80 80">
                <path fill="rgb(186, 65, 65)" class="out-top" d="M37-5C25.1-14.7,5.7-19.1-9.2-10-28.5,1.8-32.7,31.1-19.8,49c15.5,21.5,52.6,22,67.2,2.3C59.4,35,53.7,8.5,37-5Z"/>
                <path fill="rgb(116, 15, 15)" class="in-top" d="M20.6,4.1C11.6,1.5-1.9,2.5-8,11.2-16.3,23.1-8.2,45.6,7.4,50S42.1,38.9,41,24.5C40.2,14.1,29.4,6.6,20.6,4.1Z"/>
                <path fill="#4275af" class="out-bottom" d="M105.9,48.6c-12.4-8.2-29.3-4.8-39.4.8-23.4,12.8-37.7,51.9-19.1,74.1s63.9,15.3,76-5.6c7.6-13.3,1.8-31.1-2.3-43.8C117.6,63.3,114.7,54.3,105.9,48.6Z"/>
                <path fill="#244b77" class="in-bottom" d="M102,67.1c-9.6-6.1-22-3.1-29.5,2-15.4,10.7-19.6,37.5-7.6,47.8s35.9,3.9,44.5-12.5C115.5,92.6,113.9,74.6,102,67.1Z"/>
            </svg>
        </div>

        <div class="left-bigasslogo">
            <img src="https://salesiancollege.ac.in/Admission201819/Logo/logo.png" alt="">
        </div>
        <div class="right-main-portion">
            <div class="da-box">
                <div class="heading">
                    <h1>Forgot Password ?</h1>
                </div>
                <form action="forgotpass.php" method="post">
                    <input type="email" name="forgot_email" placeholder="Enter your email" required>
                    <br>
                    <button type="submit">Submit</button>
                </form>
            </div> 
        </div>
</body>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

    }
    body{
        height: 100%;
        width: 100%;
    }
    .container,
    .left-bigasslogo,
    .right-main-portion,
    .da-box,
    .heading,
    form{
        display: flex;
        align-items: center;
        justify-content: center;  
    }
    .container{
        height:100%;
        width: 100%;
    }
    .left-bigasslogo,
    .right-main-portion{
        z-index:1;
    }
    .left-bigasslogo{
        height: 100%;
        width: 50%;
    }
    .left-bigasslogo img{
        height: 80%;
    }
    .right-main-portion{
        width: 50%;
        height: 100%;
    }
    .da-box{
        background-color: rgb(243, 242, 241);
        height:20rem;
        width: 25rem; 
        flex-direction: column;
    }
    .heading{
        height: 20%;
        width: 100%;
    }
    .heading h1{
        font-size:2rem;
        padding: 10px;
    }
    form{
        height: 45%;
        width: 100%;
        flex-direction: column;
    }
    input{
        width: 90%;
        height: 30%;
    }
    input,
    button{
        padding: 5px;
    }
    button{
        background-color: #244b77;
        color: white;
        width: 30%;
        height: 45px;
        border: none;
        cursor: pointer;
        margin: 5px;
        font-size: large;
    }
    button:hover{
        
    }
    body {
        background-color: #eaa441;
    }
    svg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
    }
    a {
        text-decoration: none;
        color: black;
        margin-left: 1em;
    }
    a:hover {
        text-decoration: underline;
    }
    a img.icon {
        display: inline-block;
        height: 1em;
        margin: 0 0 -0.1em 0.3em;
    }

    @keyframes rotate {
            0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
    .out-top {
        animation: rotate 20s linear infinite;
        transform-origin: 13px 25px;
    }
    .in-top {
        animation: rotate 10s linear infinite;
        transform-origin: 13px 25px;
    }
    .out-bottom {
        animation: rotate 25s linear infinite;
        transform-origin: 84px 93px;
    }
    .in-bottom {
        animation: rotate 15s linear infinite;
        transform-origin: 84px 93px;
    }
</style>
</html>