<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ESTJ</title>
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
                <h1>ESTJ</h1>
                <img src="images/ESTJ.jpg" alt="ESTJ">
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
                <p>Dominant: Extroverted Thinking (Te) - Being their dominant judging function, ESTJs are very logical and pragmatic. They are concerned with efficiency and productivity. Acquiring practical knowledge for the sake of achieving something with external data and frameworks. It makes them adept with quick decision making and snap judgements with assertiveness. Therefore, they have little qualms with being critical and receiving criticism given their objectivity. However, this can also in turn make them rather harsh or blunt when delivering criticism as they are very concerned with results.</p>
                <p>Auxiliary: Introverted Sensing (Si) - Being the main perceiving function, ESTJs perceive sensory information within a stable and structured manner. Giving them a detailed and routined approach. This works in conjunction with their Te as they prefer to utilise what is practical with systems and frameworks and what is known to work from their own subjective experiences. This can make them quite dogmatic given the concern they have for the maintenance of their systems</p>
                <p>Tertiary: Extroverted Intuition (Ne) - This perceiving function concerns itself to consider multiple possibilities and see numerous perspectives within an abstract. Whilst they would prefer to have their more grounded, dogmatic approach with their Si, they can occasionally be creative and unconventional when the occasion calls for it. This can make them rather flexible when necessary as it enables them to spot patterns and connections for better understanding for not only managing systems but the bigger picture in general. This will be taken into consideration if it has pragmatic applications to it through their Te.</p>
                <p>Inferior: Introverted Feeling (Fi) -This judging function is concerned with making decisions based on their internal core feelings and values. With it being their inferior function, this means that ESTJs can get very uncomfortable on being in touch with their own emotional feelings and values or emotional situations as they prefer to be logical and objective as opposed to letting their judgements be clouded by their emotions. If they do leave their internalised feelings unchecked, it can make them lack self-awareness with the stresses they could be dealing with as a byproduct of their pursuits or neglect it. And they will not be aware about how sensitive they can be and prone to emotional outbursts depending on how unchecked they are. The preference for their Te also means that they can be blunt or tactless when delivering criticism with the lack of compassion of their inferior Fi. However, healthy ESTJs can balance out their pragmatic logic and results-oriented decision making by keeping in touch with their own feelings and their compassion they may neglect and use appropriately depending on the situation.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy ESTJs are known for their decisiveness, practicality, organisation, and productivity. However, they can become unhealthy when they enter a Te-Ne loop. Suppressing their Si and Fi. Their pragmatic thinking is bombarded with numerous possibilities, often negative ones. Often taking hasty action on a whim without careful consideration of the facts and details and having difficulty with prioritisation.</p>
                <p>When ESTJs face extreme stress and such, they may start to enter an Fi grip. They become much more scattered, emotional, insecure, sensitive, disorganised, volatile, reclusive, unmotivated, and feel underappreciated. To help with this, encourage them to sort their feelings out with what they value and steadily guide them back to their logical thinking with clarity.</p>
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
