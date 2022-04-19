<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ISTP</title>
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
                <h1>ISTP</h1>
                <img src="images/ISTP.jpg" alt="ISTP">
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
                <p>Dominant: Introverted Thinking (Ti) - This being their dominant function enables ISTPs to make decisions and judgements with thorough logical analysis. This is done by breaking down bigger ideas into smaller individual components and seeing how they all fit together. Meaning that they like to have a thorough understanding of something before they make an opinion or act. This also enables them to identify logical inconsistencies and filter out emotional biases for further accuracy and authenticity. With it being introverted, it is best to describe it as working with their own internal or subjective logic as objective data have a subjective foundation for them. Providing their own framework of logic and rather malleable with their thinking.</p>
                <p>Auxiliary: Extroverted Sensing (Se) - This being their perceiving function enables ISTPs to take in information about the physical world and embrace living in the moment. This aids them in engaging with the physical and often interested in sensory activities. In conjunction with their Ti, this aids them with their kinaesthetic intelligence as they like to engage hands-on, practical interests and test themselves to see how far they can go with those endeavours. Seeking challenges for them to solve whether they achieve it very quickly if they possess a natural aptitude for it or through trial and error. It also provides a spontaneous and openness to them regarding their endeavours. This alongside their Ti makes them very observant and have an acute attention to detail with their surroundings. However, because of this openness they are not too keen on such rigid structure and restriction.</p>
                <p>Tertiary: Introverted Intuition (Ni) - This perceiving function enables ISTPs to take in information within an abstract manner. Whilst they generally have a preference for the sensory with their Se, they are capable of taking in abstract or theoretical or having garnering interest within that spectrum. It enables them to spot patterns and connections beyond just the physical world to converge and narrow down into one whole idea. Given the subconscious pattern recognition, working in conjunction with their other functions, this will often enable them to draw hunches and come to conclusions. Giving them fast decision making skills. And it provides a level of structure and principled focus for them to strive towards.</p>
                <p>Inferior: Extroverted Feeling (Fe) - This function is concerned about seeking harmony with people. However, given that it is their inferior function, this will provide difficulty for ISTPs as it is quite unnatural for them and opposite to their Ti which values logic over emotions. Whereas humans are naturally emotional creatures which do not always mix well. This can make them rather socially awkward, anti-social, and/or insensitive given their logical nature even if they do not intend it in a bad way by any means or have trouble expressing themselves within a very emotional manner. To compensate for this, they will try to use their Ti to help solve problems for other people that they care about and encourage authenticity. However, healthy ISTPs can develop this function and become more socially adept and empathetic towards others.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy ISTPs are known for being logical, practical, spontaneous, and objective. However, they can become unhealthy when they enter a Ti-Ni loop. Repressing their Se and Fe. Becoming more withdrawn from the outside world, being more pessimistic, unrealistic, narrow-minded and feeling misunderstood as their intuition feeds their logic.</p>
                <p>When ISTPs face extreme stress and such, they may start to experience an Fe grip. When in this phase, they become less like themselves as their other functions become less concious. In doing so, they become more emotional, self-critical, incompetent, and prone to outbursts. To help them with this, encourage them to have more alone time to allow them to sort their thoughts out and their physical needs.</p>
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
