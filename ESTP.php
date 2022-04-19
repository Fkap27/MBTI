<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ESTP</title>
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
                <h1>ESTP</h1>
                <img src="images/ESTP.jpg" alt="ESTP">
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
                <p>Dominant: Extroverted Sensing (Se) - Being their dominant function, ESTPs take in information from the sensory information within an immediate manner and embrace living in the moment. They are very attuned to the real world and the changes within it. They very often prefer a more hands on and practical approach to things engaging with the enviroment making them rather observant of it. This makes them very spontaneous as they enjoy seeking new adventures, novel sensations, and such openness with sensory activities. Generally giving them a more straightforward approach.</p>
                <p>Auxiliary: Introverted Thinking (Ti) - Being their judging function, this enables ESTPs to have a thorough understanding of how something works. Allowing them to be logical and objective, filtering out emotional biases. Being able to play devil’s advocate in situations. In conjunction with their Se, this aids them regarding their kinaesthetic intelligence and being very observant of their surroundings. Making them very flexible with their environment and such. Ti does concern itself with curiosity, meaning that ETSPs will often test how far they can go with their sensory pursuits. They operate on their own inner subjective logic as for them, objective data are built on a subjective foundation. Which can make them quite blunt, playful, and nonchalant with their delivery.</p>
                <p>Tertiary: Extroverted Feeling (Fe) - This judging function is concerned about maintaining social harmony. Whilst ESTPs are less likely to be disturbed or sensitive to external disharmony given their higher functions, they will still be able to maintain social harmony. Given that it is their tertiary function, this makes them rather spontaneous when interacting with other people given their Se and makes them relish being the centre of attention. This also enables them to be quite accommodating to others with their flexible nature and be smooth in social situations as they will know how to play the social game. Although, given that their Ti is higher, it can also make them prone to being blunt and such.</p>
                <p>Inferior: Introverted Intuition (Ni) - This perceiving information concerns itself in taking in information within a very abstract manner and narrowing it down to a whole when considering the future and bigger picture. With it being their inferior function, this can often provide difficulty for ESTPs given the nature of their Se as they prefer to focus on the present reality, take things at face value and not think too far ahead, especially consider beyond the surface within an abstract manner. As they often prefer to take action, seeking novel sensory activities and live in the moment whilst retaining an openness. Which in turn can make them rather impulsive with their high energy and restlessness without taking much careful consideration of the long term ramifications and bigger picture. However, healthy ESTPs will be able to balance living in the moment and their straightforward approach whilst still being able to consider the bigger picture and not be too impulsive and reckless with their decision making.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy ESTPs are known for their bold, proactive, practical, and charismatic nature. However, they can become unhealthy when they enter an Se-Fe loop. Repressing their Ti and Ni. Meaning that they will blindly engage in sensory activities recklessly without whilst still being easily swayed by people as they seek approval from them. Making them more materialistic and pretentious. Without taking much critical thought to their actions.</p>
                <p>When ESTPs face extreme stress and such, they may enter an Ni grip. They are more detached from the sensory world as they become anxious and paranoid with the future being obsessed with premonitions and intuitions they feel beyond face value which are often more pessimistic. Making them unfocused, forgetful, and less tolerant. To help with this, enable them to be on their own to calm themselves and make sure they ground themselves and embrace living in the moment.</p>
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
