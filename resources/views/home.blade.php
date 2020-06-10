<!DOCTYPE html>
<html>
<title>SUD _ Cloud</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="/" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Bonjour {{ Auth::user()->name }}</a>
  <a href="user" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="My profile"><i class="fa fa-user"></i></a>
  <a href="dashboard" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-bell"></i></a>

                                    
  <a href="login" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" title="Logout">
    <i class="fa fa-sign-out"></i>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
  </form>
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">{{ Auth::user()->name }}</h4>
         <p class="w3-center"><img width="70px" src="/images/profile_default.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         
         
         <p><i class="fas fa-at fa-fw w3-margin-right w3-text-theme"></i> {{ Auth::user()->email }}</p>
        </div>
      </div>
      <br>
      
     
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <script type="text/javascript">
        
        function cliquer(event){
            
                var x=event.target.id;
                if(x.indexOf("dislike")!=-1){
                    var val=document.getElementById(x).value;
                document.getElementById(x).innerHTML=val+1;

                }
                else{
                var val=document.getElementById(x).value;
                document.getElementById(x).innerHTML=val+1;
            }

        }
        
    </script>
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Share your ideas with us  !</h6>
              <form  action="{{ route('home') }}" method="post">
                {{csrf_field() }}
              <input type="text" name="poste" class="w3-border w3-padding" placeholder="Statu" required /><br/>
              <input type="submit" class="w3-button w3-theme" value="Post"/>
          </form>
            </div>
          </div>
        </div>
      </div>
      @foreach($postes as $p)
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/profile_default.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">{{$p->created_at}}</span>
        <h4>{{ $p->name }}</h4><br>
        
        <p>{{$p->poste}}</p>
          
        <button type="button" onclick="cliquer(event)" id="{{$p->id}}"  class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i><span>0</span></button> 
        <button type="button" onclick="cliquer(event)" id="{{$p->id}} dislike" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-thumbs-down"></i>  dislike</button> 
      </div>
      @endforeach
      
      

      
      
    <!-- End Middle Column -->
    </div>
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->


<footer class="w3-container w3-theme-d5">
  <p>Powered by Sud Cloud</p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 
