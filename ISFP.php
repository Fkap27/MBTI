<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ISFP</title>
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
                <h1>ISFP</h1>
                <img src="images/ISFP.jpg" alt="ISFP">
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
                <p>Dominant: Introverted Feeling (Fi) - Being their dominant and judging function, ISFPs make decisions and judgements based on their own personal core values that are authentic to them. They determine their own sense of moral code based on what their gut instinct tells them is right and wrong. However, they also experience a great depth of emotions but are processed internally and have a tendency not to express them externally depending on the context and such and how much it aligns with their values. This means that they possess a great deal of compassion and empathy for others. But it can also mean that they can hold grudges. Valuing their individuality.</p>
                <p>Auxiliary: Extroverted Sensing (Se) - This being their perceiving function enables ISFPs to take in information about the physical world and embrace living in the moment. This aids them in engaging with the physical and often interested in sensory activities. Preferring a more hands-on approach to things which can make them quite adept with kinaesthetically given that they are attuned to the physical world. With their Fi, this encourages them to be very expressive and personal regarding the endeavours they take. Giving them a level of openness to new experiences and being proactive. Which also makes them not favour rigid structures and such.</p>
                <p>Tertiary: Introverted Intuition (Ni) - This perceiving function allows them to take in information within an abstract beyond the sensory world. Whilst they generally have a preference for the sensory with their Se, they are capable of taking in abstract or theoretical or having garnering interest within that spectrum. It enables them to spot patterns and connections beyond just the physical world to converge and narrow down into one whole idea. Given the subconscious pattern recognition, working in conjunction with their other functions, this will often enable them to draw hunches and come to conclusions. Giving them fast decision making skills. And it provides a level of structure and principled focus for them to strive towards.</p>
                <p>Inferior: Extroverted Thinking (Te) - This judging function involves external, pragmatic analysis of what works, organisation, and productivity. However, given that it is their inferior function and it is opposite to their Fi, it can provide difficulty for ISFPs. With them prioritising their own core personal values and such, it can make it difficult to be objective with some of their decision making as they will be more likely to think more with their hearts than their heads. Can be problematic when it comes to consistency on their productivity given their mood. Regarding their other functions, this can make them either too impulsive or too narrow-minded depending on how they use their other functions Which can make them very harsh on themselves, feeling non-productive and incompetent. It also makes them pretty sensitive to criticism as they can see it as an attack on their character given their Fi. However, healthy ISFPs can develop this function where they can still hold on to their values and make emotional judgments but also know when to be logical and objective.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy ISFPs are known for being authentic, creative, practical, considerate, and adventurous. However, they can become unhealthy when they enter an Fi-Ni loop. Repressing their Se and Te. Meaning that they will become unrealistic, fatalistic, and narrow-minded as their singular ideas are compounded to their feelings without being very pragmatic about it.</p>
                <p>When ISFPs are under extreme stress and such, they may start to experience an Te grip. Becoming less concerned with other people’s feelings and less tactful as a result. Being more quick and rather impulsive both with their decision making for the need of accomplishing tasks as well as critiquing others for their competency. Often mulling over things and catastrophising it. To help them, give them time on their own and encourage them to have a more gentle and careful consideration for their approach and sort their thoughts.</p>
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
