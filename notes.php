<html>

<!--
AUTHOR: Dhruv Bhaskar
LAST MODIFIED: 31 December 2013
-->

<head>

<style type="text/css">

.date{
	font-family:'Old Standard TT', sans-serif;
	font-size:18px;
	text-align:right;
}

.content{
	font-family:'Ubuntu', sans-serif;
	font-size:18px;
}

a{
	text-decoration:none;
	-o-transition:.5s;
	-ms-transition:.5s;
	-moz-transition:.5s;
	-webkit-transition:.5s;
	transition:.5s;
	color:#1E90FF;
}

a:hover{
	color:black;
}
</style>

<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>

<script type="text/x-mathjax-config">

MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});

</script>

</head>

<body>

<img src="notes/Radio_JOVE.png"/>

<p class="date">
	November 2015
</p>

<div class="content" style = "text-align:justify">
	
	Radio JOVE is a project initiated by NASA which encourages amateur scientists to observe and analyse natural radio emissions of Jupiter, the Sun and our galaxy. A kit provided by Radio JOVE Project Inc. is used to obtain emission patterns which can then be analysed using softwares like Radio-Skypipe, Radio-Jupiter Pro etc. <br><br>
	
	As a team at the University of Calgary, we looked into areas of potential optimization in this project. I attempted to model several designs of the receiver antenna with an aim to reduce the overall size while maintaining performance. Using the Numerical Electromagnetics Code - 2 (<a href = "http://www.qsl.net/4nec2/">4nec2</a>) software, I simulated the electromagnetic response of various antennas at a frequency of 20.1 MHz (corresponding to a wavelength of $\lambda$ = 14.9 meters) which is the frequency of operation of the Radio JOVE set up. Promising results were obtained for the loop design, as summarized below:<br>
	
	<img src="notes/loop_design1.png" width="370" height="300" align="right"/><br/>
	
	A loop antenna is made up of two conducting loops of wire: the outer loop and the inner coupling loop as shown in the diagram. For optimized results, <br><br> 
	<center>diameter of outer loop = $\lambda \over 15$ <br><br>
	diameter of inner coupling loop = <br/>($1 \over 5$) $\times$ (diameter of outer loop) </center><br/><br/><br/>
	
	The tuned value of the capacitor was found to be 16.13 pF giving V.S.W.R. = 2.6 and a total maximum gain of 2.53 dBi. The 3D emission pattern is shown below: <br><br>
	
	<img src="notes/dipole_fieldpattern.png" width = "320" height = "295"/> 
	<img src="notes/dipole3D.png" width = "370" height = "400"/><br/><br/><br/>
	
	A frequency sweep shows that this design is indeed optimized for our frequency of operation (20.1 MHz): <br/><br/><br/>
	<center><img src="notes/frequency_sweep.png" width="700" height="500" border="1"/></center><br/><br/>
	
</div>
	

<img src="notes/montecarlo.png"/>

<p class="date">
	December 2013
</p>

<div class="content" style = "text-align:justify"><br>

	<img src="notes/image.png" width="200" height="200" align="right"/>
	
	Consider distributing points randomly on a square of side length 100 units which has a circle of radius 50 units inscribed in its centre.
	Now, the probability that a point lies inside the circle is equal to : <br><br> 
	<center>Area of the circle / Area of the square = $\pi \over 4$</center><br>
	If we carry out this simple Monte Carlo experiment, then $\pi$ can be estimated using :<br><br>
	<center>(Number of points inside the circle / Total number of points) $\times 4$ </center><br>
	It is clear that if we increase the number of points (iterations), then the error in estimation converges to zero.<br><br>
	
	<center><img src="notes/graph.png" width="700" height="500"/></center><br>
	
	Figure: Estimates of $\pi$ and corresponding errors vs. number of iterations (generated with GNU Plot)<br><br>
	
	Code written in C++ and Bash

</div>

</body>

</html>