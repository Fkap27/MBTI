<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ENFP</title>
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
                <h1>ENFP</h1>
                <img src="images/ENFP.jpg" alt="ENFP">
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
                <p>Dominant: Extraverted Intuition (Ne) - This being their dominant and perceiving function, ENFPs perceive things in a very abstract manner and see the bigger picture as they can take information very quickly, consider many possibilities and think outside the box. Being able to make multiple connections whether they are related or unrelated. This can make them very spontaneous and imaginative. Being able to look at things from multiple angles and perspectives. This can also make them seem rambly and jump from tangent to another and often take longer for them to form conclusions and have an overall point.</p>
                <p>Auxiliary: Introverted Feeling (Fi) - Being their judging function, ENFPs will more likely make decisions and judgements based on their own personal core values that are authentic to them. They determine their own moral compass based on what they feel is right and wrong. In conjunction with their Ne, they will first explore multiple options and then determine how they personally feel about them and how it aligns with their core values. This also enables them to empathise with others and be compassionate towards them. However, this also means they can feel a great deal of emotions which are rather internalised and they may not always feel comfortable expressing them depending on the context. And whilst they can be compassionate and empathetic, they can also hold grudges depending on how they feel about someone.</p>
                <p>Tertiary: Extraverted Thinking (Te) - This function is concerned about pragmatic logic acquiring knowledge such as external data and frameworks that work and valuing productivity. For ENFPs, whilst they will prefer to make judgements with their Fi, this provides a more logical and objective side for them. Where they can be more pragmatic, reasonable, and proactive. They can do so as long as it does not go against their own core values too much. Given their preference for their individuality, they can be sensitive to criticism depending on the delivery but are receptive to it thanks to their Ne.</p>
                <p>Inferior: Introverted Sensing (Si) - This perceiving function provides stability and structure to the sensory information being perceived. Typically using the past for future application. With this being their inferior function, ENFPs will naturally struggle with this given the nature of Ne as they dislike feeling so limited with rigid structures, routines, plannings and being very traditional and conservative as they prefer to be very flexible, liberal, and unorthodox. Making them quite rebellious in nature. In turn, this can make them quite oblivious to the details of concrete daily life and not be consistent with their maintenance. However, healthy ENTPs can develop a balance with their Ne and Si by organising themselves that will be beneficial for them in the long run with a nice structure with a level of realism whilst still keeping their options open and flexible.</p>
                <h3><a name="Loop&Grip"></a>Loop & Grip</h3>
                <p>Healthy ENFPs are known for being imaginative, spontaneous, authentic, and compassionate. However, they can become unhealthy when they enter a Ne-Te grip. Repressing their Fi and Si. Meaning that they become obsessed chasing after ideas and productivity without getting any input from their personal feelings as to whether it falls in line with their core values and ethics.</p>
                <p>When ENFPs face extreme stress, they may start to experience an Si grip. They become much more reserved, self critical, paranoid, uninspired as they are obsessed with details, maintenance, and control. To help with this, they should be encouraged to relax, take things one step at a time, consider what truly matters to them, and allow them to be creative.</p>
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
