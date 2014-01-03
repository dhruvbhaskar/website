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

</head>

<body>

<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>

<script type="text/x-mathjax-config">

MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});

</script>

<img src="notes/montecarlo.png"/>

<p class="date">
	31 December, 2013
</p>

<div class="content"><br>

	<img src="notes/image.png" width="200" height="200" align="right"/>
	
	Consider distributing points randomly on a square of side length 100 units which has a circle of radius 50 units inscribed in its centre.
	Now, the probability that a point lies inside the circle is equal to : <br><br> 
	<center>Area of the circle / Area of the square = $\pi \over 4$</center><br>
	If we carry out this simple Monte Carlo experiment, then $\pi$ can be estimated using :<br><br>
	<center>(Number of points inside the circle / Total number of points) $\times 4$ </center><br>
	It is clear that if we increase the number of points (iterations), then the error in estimation converges to zero.<br><br>
	
	<center><img src="notes/graph.png" width="700" height="500"/></center><br>
	
	Figure: Estimates of $\pi$ and corresponding errors vs. number of iterations (generated with GNU Plot)<br><br>
	
	<a href="">Source Code</a> in C++ and Bash

</div>

</body>

</html>