 <!-- Masthead-->
 <html>
 <head>
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<style>
*{
    font-family:"Poppin", sans-serif;
}
body{
    background: #ff7b000a;
}
.heading{
    text-align: center;
    font-size: 50px;
    margin: 0px;
    padding: 0px;
    }
.image-container{
        
        display: flex;
        justify-content: center;
        align-items: center;
    }
.image{
        width:120px;
        height:120px;
        background: #fa1e34;
        margin: 20px 50px;
        padding:20px 0px;
        border-radius: 50%;
        border: 3px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 0px 50px rgb(145 ,1,1)
    }
.image:hover{
        border: 3px solid #ffff;
    }
img{
        width: 116px;
        height:116px;
        border-radius: 50%;
    }
.info-container{
        width:1000px;
        height:350px;
        display:flex;
        justify-content:center;
        align-items: center;
        background: #ffff;
        margin: 0 auto;
        margin-top:50px;
        border-radius: 5px; 
        box-shadow: 0px 0px 50px rgb(145 ,1,1)
    }
.profile{
    width:250px;
    height: 325px;
    border-radius:15px;
    padding:10px;
    margin:0;
}
.name{
    margin-top:80px;
    padding:20px 20px;
    text-align:left;
    font-size: 40px;
    line-height: 20px;
}
.nim{
    
    padding: 0px 20px;
    text-align:left;
    margin:0;
    line-height: 20px;
}
.abt{
    font-size:20px;
    height: 120px;
    padding: 0px 20px;
    margin :20px 0px;
}
</style>

}
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #ee6f57;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

    <section class="page-section">
        <div class="container">
    <?php echo html_entity_decode($_SESSION['setting_about_content']) ?><br>
       <body>
       <h1 class="heading">Warteg's Team</h1>
       <div class="image-container">
            <div class="image" onclick="fetch_info(0)"><img src="assets/img/billy.jpg"></div>
            <div class="image" onclick="fetch_info(1)"><img src="assets/img/gape.jpg"></div>
            <div class="image" onclick="fetch_info(2)"><img src="assets/img/elfajar.jpg"></div>
            <div class="image" onclick="fetch_info(3)"><img src="assets/img/nehe.jpg"></div>
        </div>
        

        <div  class="info-container">
            <img class="profile" id="profile" src="assets/img/logoavatar.png" >
            
            <div class="info">
                <h1 class="name" id="name"></h1>
                <h3 class="nim" id="nim"></h3>
                <p class="abt" id="abt">
                    
                </p>
            </div>
            </div>
            <script>
                function fetch_info(i){
                    let profile=["assets/img/billy.jpg","assets/img/gape.jpg","assets/img/elfajar.jpg","assets/img/nehe.jpg"];
                    let name=["Billy Natanael Wongkar","Gilang Satria Putra","Elfajar Bintang Samudera","Nehemia Cecio Tanjung Jati"];
                    let nim=["00000037503","00000037741","00000037235","00000039011"];
                    let abt=[" a.k.a samuel mahasiswa asal manado dan suka sekali membaca komik #SWAGJUTSU"," a.k.a gape, bismillah SAP amin dan jangan lupa dengerin BILCIN di UMN RADIO #SWAGJUTSU"," a.k.a mahasiswa tampan, bismilah CISCO AMINNNNNN #SWAGJUTSU."," a.k.a NE, Siapkan diri hadapi Semester 5 #SWAGJUTSU" ];
                    document.getElementById("profile").src=profile[i];
                    document.getElementById("name").innerHTML= name[i];
                    document.getElementById("nim").innerHTML= nim[i];
                    document.getElementById("abt").innerHTML= name[i] + abt[i];
                    }

            </script>   
        </body>
    </section>
        

</body>