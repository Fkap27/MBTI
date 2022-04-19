<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ENTJ</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
    <script>
      function myFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
          } else {
            li[i].style.display = "none";
          }
        }
      }
    </script>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            
            <ul class="sidebar-nav" id="myMenu">
                <li class="sidebar-brand">
                    <a href="index.php">
                        MBTI
                    </a>
                </li>
                <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
                <li><a href="CognitiveFunctions.php">Cognitive Functions</a></li>
                <li><a href="INTP.php">INTP</a></li>
                <li><a href="INFP.php">INFP</a></li>
                <li><a href="INTJ.php">INTJ</a></li>
                <li><a href="INFJ.php">INFJ</a></li>
                <li><a href="ISTP.php">ISTP</a></li>
                <li><a href="ISFP.php">ISFP</a></li>
                <li><a href="ISTJ.php">ISTJ</a></li>
                <li><a href="ISFJ.php">ISFJ</a></li>
                <li><a href="ENTP.php">ENTP</a></li>
                <li><a href="ENFP.php">ENFP</a></li>
                <li><a href="ENTJ.php">ENTJ</a></li>
                <li><a href="ENFJ.php">ENFJ</a></li>
                <li><a href="ESTP.php">ESTP</a></li>
                <li><a href="ESFP.php">ESFP</a></li>
                <li><a href="ESTJ.php">ESTJ</a></li>
                <li><a href="ESFJ.php">ESFJ</a></li>
                <li><a href="register/index.php">Register</a></li>
                <li><a href="login/index.php">Login</a></li>
                <form method='post' action=""><input type="submit" value="Logout" name="but_logout"></form>
                <li class='active' style='float:left;'>
                  <?php 
                  // logout
                  if(isset($_POST['but_logout'])){
                      session_destroy();
                      header('Location: index.php');
                  }
                  if(isset($_SESSION['uname']))
                    { 
                      echo $_SESSION["uname"];
                    }
                  elseif(isset($_SESSION['uname']))
                    {
                      echo '<a href="register/index.php">Register</a><a href="login/index.php">Login</a></li>';
                    }
                  ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>ENTJ</h1>
                <img src="images/ENTJ.jpg" alt="ENTJ">
                <?php
	function TableOfContents($depth)
	/*AutoTOC function written by Alex Freeman
	* Released under CC-by-sa 3.0 license
	* http://www.10stripe.com/  */
	{
	$filename = __FILE__;
	//read in the file
	$file = fopen($filename,"r");
	$html_string = fread($file, filesize($filename));
	fclose($file);
 
	//get the headings down to the specified depth
	$pattern = '/<h[2-'.$depth.']*[^>]*>.*?<\/h[2-'.$depth.']>/';
	$whocares = preg_match_all($pattern,$html_string,$winners);
 
	//reformat the results to be more usable
	$heads = implode("\n",$winners[0]);
	$heads = str_replace('<a name="','<a href="#',$heads);
	$heads = str_replace('</a>','',$heads);
	$heads = preg_replace('/<h([1-'.$depth.'])>/','<li class="toc$1">',$heads);
	$heads = preg_replace('/<\/h[1-'.$depth.']>/','</a></li>',$heads);
 
	//plug the results into appropriate HTML tags
	$contents = '<div id="toc"> 
	<p id="toc-header">Contents</p>
	<ul>
	'.$heads.'
	</ul>
	</div>';
	echo $contents;
	}
 ?>
 <?php TableOfContents(3); ?>
                <h3><a name="CognitiveFunctions"></a>Cognitive Functions</h3>
                <p>Dominant: Extraverted Thinking (Te): With this being their dominant judging functions, ENTJs are very logical and pragmatic. They are concerned with efficiency and productivity. Acquiring practical knowledge for the sake of achieving something with external data and frameworks. It makes them adept with quick decision making and snap judgements with assertiveness. Therefore, they have little qualms with being critical and receiving criticism given their objectivity. However, this can also in turn make them rather harsh or blunt when delivering criticism as they are very concerned with results.</p>
                <p>Auxiliary: Introverted Intuition (Ni): This perceiving function means that ENTJs take in information within a more abstract manner. Thanks to this subconscious pattern recognition, they are able to look beyond the surface and think of the bigger picture as they can see connections and trends to culminate to a bigger whole. Alongside the nature of their Te, it enables them to effectively plan and organise. As well as making them take things into careful consideration to draw decisive conclusions.</p>
                <p>Tertiary: Extraverted Sensing (Se): This perceiving function enables ENTJs to take information about the physical world with their five senses and live in the moment. Whilst ENTJs are very organised and will prefer to be so, this allows them to enjoy more novel experiences and have certain materialistic values. In conjunction with the other functions, it can provide a level of realism for their goals and planning as well as encouraging them to enact it whilst providing a level of flexibility for them in the moment. Making them quite straightforward and assertive in not only decision making skills but also in general.</p>
                <p>Inferior: Introverted Feeling (Fi): This judging function is concerned with making decisions based on their internal core feelings and values. With it being their inferior function, this means that ENTJs can get very uncomfortable on being in touch with their own emotional feelings and values or emotional situations as they prefer to be logical and objective as opposed to letting their judgements be clouded by their emotions. If they do leave their internalised feelings unchecked, it can make them lack self-awareness with the stresses they could be dealing with as a byproduct of their pursuits or neglect it. And they will not be aware about how sensitive they can be and prone to emotional outbursts depending on how unchecked they are. The preference for their Te also means that they can be blunt or tactless when delivering criticism with the lack of compassion of their inferior Fe. However, healthy ENTJs can balance out their pragmatic logic and results-oriented decision making by keeping in touch with their own feelings and their compassion they may neglect and use appropriately depending on the situation.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy ENTJs are known for being productive, ambitious, determined, and calculating. However, they can become unhealthy when they enter a Te-Se grip. Repressing their Ni and Fi. They become very obsessed with being productive and proactive without thinking about the long term ramifications. Making them impatient, irritable, self-indulgent, and reckless. And take things at face value without looking at the underlying patterns.</p>
                <p>When ENTJs face extreme stress and such, they may start to enter an Fi grip. They become much more scattered, emotional, insecure, sensitive, disorganised, volatile, reclusive, unmotivated, and feel underappreciated. To help with this, encourage them to sort their feelings out with what they value and steadily guide them back to their logical thinking with clarity.</p>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    



  
</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
</html>
