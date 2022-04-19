<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ISFJ</title>
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
                <h1>ISFJ</h1>
                <img src="images/ISFJ.jpg" alt="ISFJ">
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
                <p>Dominant: Introverted Sensing (Si) - Being their dominant function, ISFJs perceive sensory information within a very structured and stable manner. Meaning that they often take information about the present, utilise the past and the familiar to contribute to their decision making skills. Which makes them very structured and detailed as they can have great recollection and preservation of the past and present. The same dedication can be applied to their maintenance as they are often great with routines and organisation. Making them quite conservative with their mindset, abiding by conventions, traditions, and such. Which can make them quite narrow-minded as well given the preference for conventionality.</p>
                <p>Auxiliary: Extroverted Feeling (Fe) - As their judging function, ISFJs are concerned with seeking and maintaining group harmony and helping people. Making them very compassionate, empathetic, and endearing. In conjunction with their Si, it makes them very good at reading and managing people as they are able to retain precise detail regarding their characteristics and such. Especially being considerate of traditions, social norms, conventions regarding people.</p>
                <p>Tertiary: Introverted Thinking (Ti) - This function is used to thoroughly understand how something works and filter out emotional biases when making judgements and decisions. To help balance out their Fe, ISFJs use this to analyse and think more critically. They can use their Ti to help better their understanding of the details of how the world works. Which alongside their Si can help them think and be more informed before expressing an opinion or judgement. It helps better their understanding of people dynamics regarding their Fe. Whilst they will more likely make judgements with their Fe, ISFJ will still be capable of objective decision making with their Ti. Which overall will help them understand how things fit together with all the details.</p>
                <p>Inferior: Extroverted Intuition (Ne) - This perceiving function concerns itself with perceiving information within a very abstract manner. Generating and exploring multiple ideas and possibilities and thinking outside the box. Being their inferior function, this will often provide difficulty for ISTJs given the nature of their Si. Given their reliance on it, it can very often make them narrow-minded and dogmatic with their perspectives as it is based on their own subjective experience of the world and adherence to the familiar and conventionality with rigid structures and traditions. Meaning that they will often struggle to take risks and think outside the box with the bigger picture as they may be too focused on the established concrete details. However, healthy ISFJs can balance their familiar conventions but still be able to keep their mind open, think outside the box when considering more unconventional options and take risks when necessary.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy ISFJs are known for their gentle, accommodating, considerate, and responsible nature. However, they can become unhealthy when they enter an Si-Ti loop. Repressing their Fe and Ne. Their subjective experience is compounded by their internal logic. Making them cold, distant, narrow-minded, pessimistic and prone to overthinking.</p>
                <p>When ISFJs are under extreme stress and such, they may start to experience an Ne grip. They become more compounded with too many possibilities being too scattered, often thinking about negative outcomes, less responsible, more reckless and being confused overall. To help with this, give them time to sort out their thoughts and become more reasonable with them.</p>
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
