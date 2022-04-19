<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>INTP</title>
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
                <h1>INTP</h1>
                <img src="images/INTP.jpg" alt="INTP">
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
                <p>Dominant: Introverted Thinking (Ti) - This being their dominant function enables INTPs to make decisions and judgements through logical analysis done over time within their heads. This is done by breaking down bigger ideas into smaller individual components and seeing how they all fit together. Meaning that they like to have a thorough understanding of something before they make an opinion or act. This also enables them to identify logical inconsistencies and filter out emotional biases for further accuracy and authenticity. Given that it is introverted, it is best to describe it as working with their own internal or subjective logic as objective data have a subjective foundation for them. Providing their own framework of logic and making them rather versatile and spontaneous with their thinking.</p>
                <p>Auxiliary: Extraverted Intuition (Ne) - As the main perceiving function, this enables INTPs to gather information within a more abstract manner as they prefer to look beyond the surface and identify hidden patterns and possibilities from different ideas, facts, and experiences. Meaning that they have an idea and look at different possibilities to supplement their understanding of it. Making them very open-minded and think outside the box. However, this also means that it takes them longer to draw conclusions or act. This can also make them seem rather rambly within conversation as they can jump from one topic to another based on related or unrelated connections which can make conversations with them rather spontaneous as opposed to being linear.</p>
                <p>Tertiary: Introverted Sensing (Si) - This function provides stability and structure for all the interesting information and experiences INTPs take in for their internal world. Which in turn they can use for future reference. Whenever they do collect new information and experiences, they will compare what they already know and make decisions and such for the future. This enables them to have precise language and articulate themselves very well. Whilst they generally do not prefer to be limited by rigid structure and planning, Si can make them creatures of comfort with their own routines and maintenance. Bringing a conservative element to their liberal Ne as they can be minimalists for their sustenance regarding their interactions with the physical world.</p> 
                <p>Inferior: Extraverted Feeling (Fe) - This function is concerned about seeking harmony with people. However, given that it is their inferior function, this will provide difficulty for INTPs as it is quite unnatural for them and opposite to their Ti which values logic over emotions. Whereas humans are naturally emotional creatures which do not always mix well. This can make them rather socially awkward, anti-social, and/or insensitive given their logical nature even if they do not intend it in a bad way by any means or have trouble expressing themselves within a very emotional manner. To compensate for this, they will try to use their Ti to help solve problems for other people that they care about and encourage authenticity. However, healthy INTPs can develop this function and become more socially adept and empathetic towards others.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy INTPs are generally known for their rationality, objectivity and open-mindedness thanks to the usage of all their cognitive functions. However, they can become unhealthy if they enter a Ti-Si loop. Repressing their Ne and Fe functions. Meaning that they will be caught in a cycle of relying only their own experiences to support their own logic and not consider other possibilities. This makes them more reclusive and shy away from the feelings and needs of other people. This can certainly make them feel lonely and unappreciated.</p>
                <p>When INTPs face extreme stress and such, they may start to experience an Fe grip. When in this phase, they become less like themselves as their other functions become less concious. In doing so, they become more emotional, self-critical, incompetent, and prone to outbursts. To help them with this, encourage them to have more alone time to allow them to sort their thoughts out and their physical needs.</p>
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
