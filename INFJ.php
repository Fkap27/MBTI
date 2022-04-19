<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>INFJ</title>
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
                <h1>INFJ</h1>
                <img src="images/INFJ.jpg" alt="INFJ">
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
                <p>Dominant: Introverted Intuition (Ni) -  With this being their dominant function, INFJs perceive in a very abstract manner and think in concepts. Seeking the underlying patterns, connections, and the true meaning of something as opposed to just sticking with the concrete facts. Arriving to these hunches thanks to their intuition with the subconscious pattern recognition. All of these ideas culminate into a monolith and categorises them. Enabling INFJs to think about the future and conceive a goal or vision and be more decisive with conclusions and predictions.</p>
                <p>Auxiliary: Extraverted Feeling (Fe) - As their judging function, INFJs are concerned with seeking harmony within the group and helping people. Meaning that they are very accommodating to others, learning how to read the room, understand social norms, and empathise with them. In conjunction with their Ni, it makes them very good at reading people, being able to look past the surface of what someone is outwardly expressing. Making them idealists as they would typically like to strive towards the betterment of society. For INFJs, this also enables them to be manipulative with people if they choose to be.</p>
                <p>Tertiary: Introverted Thinking (Ti) - This function is used to thoroughly understand how something works and filter out emotional biases when making judgements and decisions. To help balance out their Fe, INFJs use this to analyse and think more critically. They can use their Ti to better help understand the visions from their Ni and make any refinements, if necessary. Which alongside their Ni can help them think and be more informed before expressing an opinion or judgment. It helps better their understanding of people dynamics regarding their Fe. Whilst they will more likely make judgements with their Fe, INFJ will still be capable of objective decision making with their Ti. In combination with their Ni, it can certainly help them with problem-solving.</p>
                <p>Inferior: Extraverted Sensing (Se) - This is a perceiving function that is all about taking in information of the physical world and embracing living in the moment and quickly adapt to whatever is present. For INFJs, this can provide difficulty given the nature of their dominant function Ni which is so focused on seeing beyond the physical world for underlying patterns and the big picture, they can miss out on what is going on in the immediate moment. The more often unpredictable and chaotic nature of reality can throw them off being overstimulated with it. However, healthy INTJs can have a balance of their vision whilst also having a nice balance of being flexible and focusing on the present when needed.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy INFJs are known for being insightful, empathetic, considerate, and think about the bigger picture. However, they can become unhealthy when they enter an Ni-Ti loop. Repressing their Fe and Se. Meaning that they will become more detached from the sensory world and be critical of others. Being more narrow minded with their subjective logic and becoming more withdrawn from other people, perspectives, and ideas as they are very caught up in their own ideas without considering empirical evidence.</p>
                <p>When INFJs face extreme stress and such, they may start to experience an Se grip. When in this phase, they will become more impulsive, irresponsible, reckless, self indulgent and have more unhealthy focus with the sensory world. To help with this, encourage them to take a step back and think calmly and collectively about the situation and take some time to evaluate.</p>
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
