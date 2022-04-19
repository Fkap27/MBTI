<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ENFJ</title>
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
                <h1>ENFJ</h1>
                <img src="images/ENFJ.jpg" alt="ENFJ">
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
                <p>Dominant: Extraverted Feeling (Fe) - This being their dominant judging functions means that ENFJs are concerned with the social harmony of the group. Meaning that they are very adept in social situations, read the room well, and be able to navigate or influence a crowd. Not only does it make them very empathetic and compassionate as they are able to be attuned to what other people are feeling but also make them very charismatic leaders. They very much concern themselves with how others perceive them as well given how much value and attention they place on people which is often the source of their motivation. They are also quicker to express how they feel as well.</p>
                <p>Auxiliary: Introverted Intuition (Ni) - This being their perceiving function, ENFJs perceive information within an abstract manner and see beyond the surface with the physical world, thinking about the bigger picture. Meaning that they are able to spot patterns and find connections with their subconscious pattern recognition which provides them with hunches and insights. This will narrow down and culminate to a bigger whole idea and make them quicker to draw conclusions and predictions. Enabling to be good organisers as well. Alongside their Fe, this will often make them very idealistic and have causes to help people and communities. Even being more openly expressive about them thanks to their Fe. And heir Ni can also aid them when it comes to reading people.</p>
                <p>Tertiary: Extraverted Sensing (Se) - This perceiving function enables ENFJs to perceive information through the physical world and live in the present moment. Whilst they do prefer to perceive the impressions and such they gather with Ni, this function enables them to provide the concrete details of the sensory world to fill in those impressions. This makes them more proactive when trying to implement the ideas derived from their Ni. It encourages them to engage more with people regarding their Fe and have more novel experiences, being open to adventure and such.</p>
                <p>Inferior: Introverted Thinking (Ti) - This function is concerned about logical consistency and accuracy. With this being their inferior function, this means it will often provide difficulty for ENFJs to make judgements and such based on unbiased logic given their dominant Fe. They may be too concerned with trying to appease others and not be objective or logical when it comes to their judgements when necessary. They may not find themselves often critically analyse their own ideas and such with thorough logic to refine it as they can normally be content with them as is. With inferior Ti, it can prevent a level of selfishness when necessary for themselves and their Fe nature can lead them to be a little self-sacrificing for their own good where other people can potentially take advantage of. Leading to a certain lack of self-awareness for themselves as they can often be too concerned with analysing other people which they can utilise their Ti for. But perhaps not that much for themselves. However, healthy ENFJs are able to balance their desire and concern for other people with a level of logic and objectivity when necessary to think critically on not just others but themselves as well. Even allowing time to better inform themselves on things for better accuracy.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy ENFJs are known for being compassionate, empathetic, charitable, and charismatic. However, they can become unhealthy when they enter an Fe-Se loop. Repressing their Ni and Ti. They become obsessed with other people as they want to seek approval and constantly involve themselves with them. Being more materialistic and caring about superficial image and emotional highs without considering the bigger picture as they do not utilise critical thinking.</p>
                <p>When ENFJs face extreme stress and such, they may enter a Ti grip. They become more withdrawn, distant, cold, pessimistic, passive aggressive, judgemental, self-critical, as they are prone to overthinking which can make them rather indecisive. To help with this, ensure that they steadily take things one step at a time with their thought process and encourage them to connect with people again.</p>
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
