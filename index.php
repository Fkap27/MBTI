<?php
include "login/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
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
                <h1>What is MBTI?</h1>
                <p>The Myers-Briggs Type Indicator is a descriptive tool for the intention of self-help and discovery. The aim of it is to identify what personality type an individual is. The personality type essentially describes how someone processes information and makes their judgements. Which will affect their approach to their daily lives. However, it will be important to mention that this will not describe every facet of an individual's personality nor will it describe what skills a personlity type may possess as that will depend on the individual. But should be seen as a tool to aid in self-awareness and understand other people. To properly understand how MBTI works, it will be important to learn about the <a href="CognitiveFunctions.php">cognitive functions</a>.</p>           
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
                <h3><a name="BriefHistory"></a>A Brief History</h3>
                <img src="images/history.jpg" alt="history">
                <p>The foundation for MBTI was originally based on Carl Jung's theory of Psychological Types. Which Katherine Briggs & her daughter Isabel Myers built upon Jung's work during World War 2 to provide some real world applications for it. Which they then continued to further develop this indicator over the next couple decades in hopes of benefiting people for self-awareness and such. Which people afterwards in the psychology community have continued to devote themselves in furthering the study and applying to help others.</p>
                <h3><a name="MBTITests"></a>MBTI Tests</h3>
                <p>Here are some links to external MBTI tests and quizzes to find out your MBTI type and cognitive functions:</p>
                <p>1. <a href="https://www.16personalities.com/free-personality-test">16 Personalities Test</a></p>
                <p>2. <a href="http://keys2cognition.com/">Keys2cognition Test</a></p>
                <p>3. <a href="https://sakinorva.net/functions">Sakinorva Cognitive Function Test</a></p>
                <p>4. <a href="https://mistypeinvestigator.com/test/v1">MistypeInvestigator Test</a></p>
                <p> A pracution to mention is that the tests may not always give you an accurate result and mistype. Primarily because the questions are usually more contextual where the choices are more binary and linear as opposed to being able to answer them within a nuanced manner as there will be contexts where you utilise your lower functions. However, they can still be used as a starting point for learning MBTI and discovering your personality. Which is why it is important to learn about the cognitive functions to help narrow things down.</p>
                <h3><a name="SomeMisconceptions"></a>Some Misconceptions</h3>
                <p>1. It is a descriptive tool, not a predictive tool. MBTI serves to explain how a personality type processes information and makes judgement. Not how they will perform. It will be considered illegal and unethical to use it as a tool for employment and diagnosing mental health conditions as it is not intended for that.</p>
                <p>2. MBTI does not box people into one thing or another. Every personality type has a thinking, feeling, sensory, and intuitive function. It simply states that they have their preferences but not that they are unable to do the other.</p>
                <p>3. Two people of the same personality type will not exactly act the same way. Whilst they may share the same functions, their backgrounds and such will be different as they are their own individual selves. It will be important to not rely too much on stereotypes for the personality types.</p>
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
