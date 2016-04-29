<script type="text/javascript">
function GoBack(a){
  if(window.location.hash) {
	var hh = window.location.hash.substring(1);
 	if(hh === a){ document.write('<a href="javascript: history.go(-1)">Go back</a>'); }
	else document.write('<a href="#overview">Go to session overview</a>');
} else {
	document.write('<a href="#overview">Go to session overview</a>');	
}
}

function linkMe(){
	var ref = document.referrer;
	if(/program/i.test(ref)) document.write('<a href="javascript: history.go(-1)">Go back to program</a>');
	else if(/contributed/i.test(ref)) document.write('<a href="javascript: history.go(-1)">Go back to abstracts</a>');
	else document.write('<a href="#overview">Go to session overview</a>');
}

function roomInfo(r,c){
  var room;
  var seats;
  
	switch(r){
	 case "c1":
	   room = "Aalborghallen";
	   seats = 790;
	   break;
	 case "c2":
	   room = "Gæstesalen";
	   seats = 149;
	   break;
	 case "c3":
	   room = "Musiksalen";
	   seats = 160;
	   break;
	 case "c4":
	   room = "Det lille Teater";
	   seats = 224;
	   break;
	 case "c5":
	   room = "Radiosalen";
	   seats = 216;
	   break;
	 default:
	   room = "Unknown";
	   seats = 0;
	   break;
	}
	document.write('<p><em>Room: ' + room + ' (' + seats + ' seats) - Chair: ' + c + '</em>	</p>');
}
</script>

<style>
.cancelled {
  text-decoration: line-through; 
  color: #ABABAB;
}

.cancelled a {
  color: #ABABAB;
}
</style>

<h1 id="overview">Oral sessions</h1>

<table style="width: 960px;">
<tr>
<th style="width: 80px;">Room</th><th style="width: 120px;">Aalborghallen</th><th>Gæstesalen</th><th>Musiksalen</th><th>Det lille Teater</th><th>Radiosalen</th>
</tr>
<tr style="font-style: italic;">
<td></td><td>(790 seats)</td><td>(149 seats)</td><td>(160 seats)</td><td>(224 seats)</td><td>(216 seats)</td>
</tr>
<tr>
<td><a href="#session1">Session 1</a> </td><td> <a href="#kaleidoscope-1">Kaleidoscope 1</a> </td><td style="width: 150px;"> <a href="#Ecology">Ecology</a> </td>
<td style="width: 200px;"> <a href="#Networks">Networks</a> </td><td style="width: 170px;"> <a href="#Reproducibility">Reproducibility</a> </td>
<td style="width: 220px;"> <a href="#Interfacing">Interfacing</a> </td>
</tr>
<tr style="font-size: 10pt;">
 <td>Chair</td><td>Heather Turner</td><td>Hadley Wickham</td><td>Claus Dethlefsen</td><td>Martin Maechler</td><td>Dirk Eddelbuettel</td>
</tr>
<tr><td style="height: 10px;"></td></tr>
<tr>
<td><a href="#session2">Session 2</a> </td><td> <a href="#kaleidoscope-2">Kaleidoscope 2</a> </td><td> <a href="#Casestudy">Case study</a> </td><td> <a href="#Clustering">Clustering</a> </td><td> <a href="#Datamanagement">Data Management</a> </td><td> <a href="#Computational">Computational Performance</a> </td>
</tr>
<tr style="font-size: 10pt;">
 <td>Chair</td><td>Romain Fran&ccedil;ois</td><td>Claus Dethlefsen</td><td>Martin Maechler</td><td>Thomas Lumley</td><td>Dirk Eddelbuettel</td>
</tr>
<tr><td style="height: 10px;"></td></tr>
<tr>
<td><a href="#session3">Session 3</a> </td><td> <a href="#kaleidoscope-3">Kaleidoscope 3</a> </td><td> <a href="#Business">Business</a> </td><td> <a href="#Spatial">Spatial</a> </td><td> <a href="#Databases">Databases</a> </td><td> <i><a href="./lightning_talks">Lightning talks</a></i></a> </td>
</tr>
<tr style="font-size: 10pt;">
 <td>Chair</td><td>Peter Dalgaard</td><td>Esben Høg</td><td>Adrian Baddeley</td><td>Thomas Lumley</td><td>James Curran</td>
</tr>
<tr><td style="height: 10px;"></td></tr>
<tr>
<td><a href="#session4">Session 4</a> </td><td> <a href="#kaleidoscope-4">Kaleidoscope 4</a> </td><td> <a href="#Medicine">Medicine</a> </td><td> <a href="#Regression">Regression</a> </td><td> <a href="#Commercial">Commercial Offerings</a> </td><td> <a href="#Interactive">Interactive graphics</a> </td>
</tr>
<tr style="font-size: 10pt;">
 <td>Chair</td><td>Susan Holmes</td><td>Heather Turner</td><td>Rasmus Waagepetersen</td><td>Romain Fran&ccedil;ois</td><td>Di Cook</td>
</tr>
<tr><td style="height: 10px;"></td></tr>
<tr>
<td><a href="#session5">Session 5</a> </td><td> <a href="#kaleidoscope-5">Kaleidoscope 5</a> </td><td> <a href="#Teaching1">Teaching 1</a> </td><td> <a href="#Methodology1">Statistical Methodology 1</a> </td><td> <a href="#ML1">Machine Learning 1</a> </td><td> <a href="#Visualisation1">Visualisation 1</a></td>
</tr>
<tr style="font-size: 10pt;">
 <td>Chair</td><td>Søren Højsgaard</td><td>Rasmus Waagepetersen</td><td>Helle Sørensen</td><td>Poul Svante Eriksen</td><td>Di Cook</td>
</tr>
<tr><td style="height: 10px;"></td></tr>
<tr>
<td><a href="#session6">Session 6</a> </td><td> <a href="#kaleidoscope-6">Kaleidoscope 6</a> </td><td> <a href="#Teaching2">Teaching 2</a> </td><td> <a href="#Methodology2">Statistical Methodology 2</a> </td><td> <a href="#ML2">Machine Learning 2</a> </td><td> <a href="#Visualisation2">Visualisation 2</a></td>
</tr>
<tr style="font-size: 10pt;">
 <td>Chair</td><td>Susan Holmes</td><td>Helle Sørensen</td><td>James Curran</td><td>Poul Svante Eriksen</td><td>Hadley Wickham</td>
</tr>
</table>

<br/>
<p style="color: #c7254e;"><em><small>
June 10th: Small change to the program - talks of Kaleidoscope 1 and 5 were interchanged.<br/>
June 15th: Tiny change - Google-talks have swapped session (now Millar in Kaleidoscope 5, Best in Interfacing).<br/>
June 25th: Cancellation - The &quot;Word Alignment tools in R&quot; talk by Majid Sarmad has been cancelled.<br/>
June 30th: Cancellation - The &quot;Massive Online Data Stream Mining using R and MOA&quot; talk by Jan Wijffels was cancelled.<br/>
July 2nd: Talk moved - The "The Network Structure of R Packages" talk by Andrie de Vries is moved to Kaleidoscope 4 from Kaleidoscope 6.</p>
</small></em></p>

<h2 id="session1">Session 1 &ndash; Wednesday 10:30 - 12:00</h2>

<h3 id="kaleidoscope-1">Kaleidoscope 1</h3>
<script type="text/javascript">roomInfo("c1","Heather Turner");</script>
<p><a href="./contributed_talks#47">flowcatchR: A user-friendly workflow solution for the analysis of time-lapse cell flow imaging data</a>
(Federico Marini) [<a href="./presentations/47.html">slides</a>]</p>
<p><a href="./contributed_talks#46">Image processing and alignment with RNiftyReg and mmand</a>
(Jonathan Clayden) [<a href="./presentations/46.pdf">slides</a>]</p>
<p><a href="./contributed_talks#181">rags2ridges: Ridge estimation and graphical modeling for high-dimensional precision matrices</a>
(Carel F. W. Peeters)</p>
<p><a href="./contributed_talks#173">dgRaph: Discrete factor graphs in R</a>
(Henrik Tobias Madsen)</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Ecology">Ecology</h3>
<script type="text/javascript">roomInfo("c2","Hadley Wickham");</script>
<p><a href="./contributed_talks#56">Optimized R functions for analysis of ecological community data using the R virtual laboratory (Rvlab)</a>
(Costas Varsos)</p>
<p><a href="./contributed_talks#98">Building ecological models bit-by-bit</a>
(David L Miller) [<a href="http://converged.yt/talks/useR2015/talk.html">slides</a>]</p>
<p><a href="./contributed_talks#213">Simulating ecological microcosms with systems of differential equations: tools for the scientific, technical and communication challenges</a>
(Andrew Dolman) [<a href="./presentations/213.pdf">slides</a>]</p>
<p><a href="./contributed_talks#26">A Graphical User Interface for R in an Integrated Development Environment for Ecological Modeling, Scientific Image Analysis and Statistical Analysis</a>
(Marcel Austenfeld)</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Networks">Networks</h3>
<script type="text/javascript">roomInfo("c3","Claus Dethlefsen");</script>
<p><a href="./contributed_talks#210">fbRads: Analyzing and managing Facebook ads from R</a>
(Gergely Daroczi) [<a href="./presentations/210.pdf">slides</a>]</p>
<p><a href="./contributed_talks#17">Web scraping with R - A fast track overview.</a>
(Peter Meißner) [<a href="./presentations/17.pdf">slides</a>]</p>
<p><a href="./contributed_talks#24">multiplex: Analysis of Multiple Social Networks with Algebra</a>
(Antonio Rivero Ostoic) [<a href="./presentations/24.pdf">slides</a>]</p>
<p><a href="./contributed_talks#233">What's new in igraph and networks</a>
(Gabor Csardi) [<a href="./presentations/233.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Reproducibility">Reproducibility</h3>
<script type="text/javascript">roomInfo("c4","Martin Maechler");</script>
<p><a href="./contributed_talks#43">rOpenSci: A suite of reproducible research tools in R</a>
(Karthik Ram)</p>
<p><a href="./contributed_talks#97">Enhancing reproducibility and collaboration via management of R package cohorts</a>
(Michael Lawrence) [<a href="./presentations/97.pdf">slides</a>]</p>
<p><a href="./contributed_talks#73">A Review of Meta-Analysis Packages in R</a>
(Joshua R. Polanin & Emily A. Hennessy) [<a href="http://rpubs.com/polanin/meta-analysis_rpackages_useR2015">web</a>]</p>
<p><a href="./contributed_talks#191">Simple reproducibility with the checkpoint package</a>
(David Smith) [<a href="./presentations/191.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Interfacing">Interfacing</h3>
<script type="text/javascript">roomInfo("c5","Dirk Eddelbuettel");</script>
<p><a href="./contributed_talks#232">Some lessons relevant to including external libraries in your R package</a>
(Kasper D. Hansen) [<a href="./presentations/232.pdf">slides</a>]</p>
<p><a href="./contributed_talks#236">Integrating R with the Go programming language using interprocess communication</a>
(Christoph Best) [<a href="./presentations/236.pdf">slides</a>]</p>
<p><a href="./contributed_talks#223">Naturally Sweet Rcpp with Modern C++ and Boost</a>
(Matt P. Dziubinski) [<a href="https://speakerdeck.com/mattpd/naturally-sweet-rcpp-with-modern-c-plus-plus-and-boost">slides</a>]</p>
<p><a href="./contributed_talks#80">Linking R to the Spark MLlib Machine Learning Library</a>
(Dan Putler) [<a href="./presentations/80.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>



<h2 id="session2">Session 2 &ndash; Wednesday 13:00 - 14:30</h2>
<h3 id="kaleidoscope-2">Kaleidoscope 2</h3>
<script type="text/javascript">roomInfo("c1","Romain Francois");</script>
<p><a href="./contributed_talks#185">archivist: Tools for Storing, Restoring and Searching for R Objects</a>
(Przemyslaw Biecek) [<a href="./presentations/185.pdf">slides</a>]</p>
<p><a href="./contributed_talks#121">R User Groups</a>
(Joseph B. Rickert) [<a href="./presentations/121.pdf">slides</a>]</p>
<p><a href="./contributed_talks#72">Computational Precision and Floating-Point Arithmetic: A Teacher's Guide to Answering FAQ 7.31</a>
(Richard M. Heiberger) [<a href="./presentations/72.pdf">slides</a>]</p>
<p><a href="./contributed_talks#33">Tiny Data, Approximate Bayesian Computation and the Socks of Karl Broman</a>
(Rasmus Bååth) [<a href="./presentations/33.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Casestudy">Case study</h3>
<script type="text/javascript">roomInfo("c2","Claus Dethlefsen");</script>
<p><a href="./contributed_talks#184">Using R for small area estimation in the Norwegian National Forest Inventory</a>
(Johannes Breidenbach) [<a href="./presentations/184.pdf">slides</a>]</p>
<p><a href="./contributed_talks#152">Using R for natural gas market balancing in the Czech republic</a>
(Ivan Kasanický)</p>
<p><a href="./contributed_talks#113">Heteroscedastic censored and truncated regression for weather forecasting</a>
(Jakob W. Messner) [<a href="./presentations/113.pdf">slides</a>]</p>
<p><a href="./contributed_talks#193">Multinomial functional regression with application to lameness detection for horses</a>
(Helle Sørensen) [<a href="./presentations/193.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Clustering">Clustering</h3>
<script type="text/javascript">roomInfo("c3","Martin Maechler");</script>
<p><a href="./contributed_talks#110">Unsupervised Clustering and Meta-Analysis using Gaussian Mixture Copula Models</a>
(Anders Ellern Bilgrau) [<a href="./presentations/110.pdf">slides</a>]</p>
<p><a href="./contributed_talks#109">Hierarchical Cluster Analysis of hyperspectral Raman images: a new point of view leads to 10000fold speedup</a>
(Claudia Beleites) [<a href="./presentations/109.pdf">slides</a>]</p>
<p><a href="./contributed_talks#31">Dirichlet process Bayesian clustering with the R package PReMiuM</a>
(Silvia Liverani) [<a href="./presentations/31.pdf">slides</a>]</p>
<p><a href="./contributed_talks#23">Examining the Environmental Characteristics of Tornado Outbreaks in the United States using Spatial Clustering</a>
(Thomas Jagger) [<a href="./presentations/23.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Datamanagement">Data Management</h3>
<script type="text/javascript">roomInfo("c4","Thomas Lumley");</script>
<p><a href="./contributed_talks#245">Taking testing to another level: testwhat</a>
(Filip Schouwenaars) [<a href="./presentations/245.pdf">slides</a>]</p>
<p><a href="./contributed_talks#229">Failing fast and early: assertive/defensive programming for R data analysis pipelines</a>
(Tony Fischetti)</p>
<p><a href="./contributed_talks#13">Getting your data into R</a>
(Hadley Wickham) [<a href="./presentations/13.pdf">slides</a>]</p>
<p><a href="./contributed_talks#51">A better way to manage hierarchical data</a>
(Christoph Glur) [<a href="http://prezi.com/mhdurntxedc4/?utm_campaign=share&utm_medium=copy&rc=ex0share">web</a> or <a href="./presentations/51.pdf">slides</a>]</p>
<p><a href="./contributed_talks#34">A proposal for distributed data-structures in R</a>
(Indrajit Roy, Michael Lawrence) [<a href="./presentations/34.pptx">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Computational">Computational Performance</h3>
<script type="text/javascript">roomInfo("c5","Dirk Eddelbuettel");</script>
<p><a href="./contributed_talks#158">Running R+Hadoop using Docker Containers</a>
(E. James Harner)</p>
<p><a href="./contributed_talks#157">Algorithmic Differentiation for Extremum Estimation: An Introduction Using RcppEigen</a>
(Matt P. Dziubinski) [<a href="https://speakerdeck.com/mattpd/algorithmic-differentiation-for-extremum-estimation-an-introduction-using-rcppeigen">slides</a>]</p>
<p><a href="./contributed_talks#137">Improving computational performance with algorithm engineering</a>
(Kirill Müller) [<a href="http://krlmlr-user15.github.io/presentation">slides</a>]</p>
<p><a href="./contributed_talks#90">Performance Analysis for Parallel R Programs: Towards Efficient Resource Utilization</a>
(Helena Kotthaus)</p>
<p><a href="./contributed_talks#131">Refactoring the xtable Package</a>
(David Scott) [<a href="./presentations/131.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>



<h2 id="session3">Session 3 &ndash; Wednesday 16:00 - 17:30</h2>
<h3 id="kaleidoscope-3">Kaleidoscope 3</h3>
<script type="text/javascript">roomInfo("c1","Peter Dalgaard");</script>
<p><a href="./contributed_talks#66">Coding for the enterprise server - what does it mean for you?</a>
(Friedrich Schuster) [<a href="./presentations/66.pdf">slides</a>]</p>
<p><a href="./contributed_talks#112">R as a citizen in a polyglot world - the promise of the Truffle framework</a>
(Lukas Stadler) [<a href="./presentations/112.pdf">slides</a> / <a href="./presentations/112.mp4">video</a>]</p>
<p><a href="./contributed_talks#159">Architect. An IDE for Data Science and R</a>
(Tobias Verbeke)</p>
<p><a href="./contributed_talks#174">Distributed computing with R</a>
(Balasubramanian Narasimhan) [<a href="./presentations/174.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Business">Business</h3>
<script type="text/javascript">roomInfo("c2","Esben Høg");</script>
<p><a href="./contributed_talks#220">Statistical consulting using R: a DRY approach from the Australian outback</a>
(Peter Baker) [<a href="./presentations/220.html">slides</a>]</p>
<p><a href="./contributed_talks#206">Using R in Production</a>
(Stefan Milton Bache)</p>
<p><a href="./contributed_talks#15">Hedging and Risk Management of CDOs portfolio with R</a>
(Giuseppe Bruno) [<a href="./presentations/15.pdf">slides</a>]</p>
<p><a href="./contributed_talks#129">Data Driven Customer Segmentation with R</a>
(Jim Porzak) [<a href="./presentations/129.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Spatial">Spatial</h3>
<script type="text/javascript">roomInfo("c3","Adrian Baddeley");</script>
<p><a href="./contributed_talks#201">Bringing Geospatial Tasks into the Mainstream of Business Analytics</a>
(Ian Cook) [<a href="./presentations/201.pdf">slides</a>]</p>
<p><a href="./contributed_talks#37">Novel hybrid spatial predictive methods of machine learning and geostatistics with applications to terrestrial and marine environments in Australia</a>
(Jin Li) [<a href="./presentations/37.pdf">slides</a>]</p>
<p><a href="./contributed_talks#2">Graphical Modelling of Multivariate Spatial Point Patterns</a>
(Matthias Eckardt)</p>
<p><a href="./contributed_talks#215">Spatial Econometrics Models with R-INLA</a>
(Virgilio Gomez-Rubio)</p>
<p><a href="./contributed_talks#40">Spatio-Temporal Analysis of Epidemic Phenomena Using the R Package surveillance</a>
(Sebastian Meyer) [<a href="./presentations/40.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Databases">Databases</h3>
<script type="text/javascript">roomInfo("c4","Thomas Lumley");</script>
<p><a href="./contributed_talks#76">Rango - Databases made easy</a>
(Willem Ligtenberg) [<a href="./presentations/76.pdf">slides</a>]</p>
<p><a href="./contributed_talks#41">Ad-Hoc User-Defined Functions for MonetDB with R</a>
(Hannes Mühleisen) [<a href="./presentations/41.pdf">slides</a>]</p>
<p><a href="./contributed_talks#54">R database connectivity: what did we leave behind?</a>
(Mateusz Żółtak)</p>
<p><a href="./contributed_talks#167">jsonlite and mongolite</a>
(Jeroen Ooms) [<a href="http://bit.ly/mongo-slides">slides</a>]</p>
<p><a href="./contributed_talks#192">Using R Efficiently with Large Databases</a>
(Michael Wurst) [<a href="./presentations/192.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Lightning">Lightning Talks</h3>
<script type="text/javascript">roomInfo("c5","James Curran");</script>
See <a href="./lightning_talks">Lightning talks</a> for titles and abstracts.
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h2 id="session4">Session 4 &ndash; Thursday 10:30 - 12:00</h2>
<h3 id="kaleidoscope-4">Kaleidoscope 4</h3>
<script type="text/javascript">roomInfo("c1","Susan Holmes");</script>
<p><a href="./contributed_talks#132">While my base R gently weeps</a>
(A. Jonathan R. Godfrey)</p>
<p><a href="./contributed_talks#67">Rapid Deployment of Automatic Scoring Models to Hadoop Production Systems</a>
(Amitai Golub) [<a href="./presentations/67.pdf">slides</a>]</p>
<p><a href="./contributed_talks#234">Fast, stable and scalable true radix sorting</a>
(Matt Dowle) [<a href="./presentations/234.pdf">slides</a>]</p>
<p><a href="./contributed_talks#93">Fast, flexible and memory efficient data manipulation using data.table</a>
(Arunkumar Srinivasan) [<a href="./presentations/93.pdf">slides</a>]</p>
<p><a href="./contributed_talks#30">The Network Structure of R Packages</a>
(Andrie de Vries) [<a href="./presentations/30.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Medicine">Medicine</h3>
<script type="text/javascript">roomInfo("c2","Heather Turner");</script>
<p><a href="./contributed_talks#92">Phenotypic deconvolution: the next frontier in pharma</a>
(Marvin Steijaert) [<a href="./presentations/92.pdf">slides</a>]</p>
<p><a href="./contributed_talks#154">medplot: A Web Application for Dynamic Summary and Analysis of Longitudinal Medical Data Based on R and shiny</a>
(Lara Lusa)</p>
<p><a href="./contributed_talks#104">Using R and free software to improve the delivery of life changing medicine to patients</a>
(Paul Metcalfe)</p>
<p><a href="./contributed_talks#16">Stratified medicine using the partykit package</a>
(Heidi Seibold) [<a href="./presentations/16.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Regression">Regression</h3>
<script type="text/javascript">roomInfo("c3","Rasmus Waagepetersen");</script>
<p><a href="./contributed_talks#89">The ilc package</a>
(Han Lin Shang) [<a href="./presentations/89.pdf">slides</a>]</p>
<p><a href="./contributed_talks#126">Approximately Exact Calculations for Linear Mixed Models</a>
(Andrew Bray)</p>
<p><a href="./contributed_talks#188">Shiny application for analyzing consumer preference and sensory data in a mixed effects model framework: introducing SensMixed package</a>
(Alexandra Kuznetsova)</p>
<p><a href="./contributed_talks#178">Spatial regression of quantiles based on parametric distributions</a>
(Chenjerai Kathy Mutambanengwe)</p>
<p><a href="./contributed_talks#32">glmmsr: fitting GLMMs with sequential reduction</a>
(Helen Ogden) [<a href="./presentations/32.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Commercial">Commercial Offerings</h3>
<script type="text/javascript">roomInfo("c4","Romain Francois");</script>
<p><a href="./contributed_talks#95">Supporting the "Rapi" C-language API in an R-compatible engine</a>
(Michael Sannella) [<a href="./presentations/95.pdf">slides</a>]</p>
<p><a href="./contributed_talks#8">Enabling R for Big Data with PL/R and PivotalR: Real World Examples on Hadoop & MPP Databases</a>
(Woo J. Jung) [<a href="./presentations/8.pdf">slides</a>]</p>
<p><a href="./contributed_talks#147">The DataRobot R Package</a>
(Ron Pearson) [<a href="./presentations/147.pdf">slides</a>]</p>
<p><a href="./contributed_talks#202">Applying the R Language in Streaming Applications and Business Intelligence</a>
(Lou Bajuk-Yorgan) [<a href="./presentations/202.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Interactive">Interactive graphics</h3>
<script type="text/javascript">roomInfo("c5","Di Cook");</script>
<p><a href="./contributed_talks#177">D3 and R Shiny - Making your graphs come to life</a>
(Monika Huhn) [<a href="./presentations/177.pdf">slides</a>]</p>
<p><a href="./contributed_talks#221">Interactive Graphics with ggplot2 and gridSVG</a>
(Michael Sachs)</p>
<p><a href="./contributed_talks#243">Interactive visualization using htmlwidgets and Shiny</a>
(Joe Cheng)</p>
<p><a href="./contributed_talks#125">Interactive Data Visualization using the Loon package</a>
(Adrian Waddell) [<a href="http://adrian.waddell.ch/talks/Loon_useR_2015/">www</a>]</p>
<p><a href="./contributed_talks#117">New interactive visualization tools for exploring high dimensional data in R</a>
(Wayne Oldford) [<a href="./presentations/117.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>



<h2 id="session5">Session 5 &ndash; Thursday 13:00 - 14:30</h2>
<h3 id="kaleidoscope-5">Kaleidoscope 5</h3>
<script type="text/javascript">roomInfo("c1","Søren Højsgaard");</script>
<p><a href="./contributed_talks#138">Formalising R Development - ValidR Enterprise</a>   
(Aimee Gott)</p>
<p><a href="./contributed_talks#195">CXXR: Modernizing the R Interpreter</a>
(Karl Millar)</p>
<p><a href="./contributed_talks#198">Fun times with R and Google Sheets</a>
(Jennifer Bryan)</p>
<p><a href="./contributed_talks#141">A Comparative Study of Complex Estimation Software</a>
(Jonathan Digby-North) [<a href="./presentations/141.pdf">slides</a>]</p>
<p><a href="./contributed_talks#219">Software Standards in the R Community: An Analysis</a>
(Oliver Keyes)</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Teaching1">Teaching 1</h3>
<script type="text/javascript">roomInfo("c2","Rasmus Waagepetersen");</script>
<p><a href="./contributed_talks#203">SWOT analysis on using R for online training</a>
(Miranda Y Mortlock)</p>
<p><a href="./contributed_talks#165">Manipulation of Discrete Random Variables in R with discreteRV</a>
(Eric Hare) [<a href="./presentations/165.pdf">slides</a>]</p>
<p><a href="./contributed_talks#60">Teaching R in heterogeneous settings: Lessons learned</a>
(Matthias Gehrke) [<a href="./presentations/60.pdf">slides</a>]</p>
<p><a href="./contributed_talks#102">Interactive applications written in R to accelerate statistical learning</a>
(Chris Wild) [<a href="./presentations/102.pdf">slides</a>]</p>
<p><a href="./contributed_talks#22">Classroom experiments</a>
(James Curran) [<a href="./presentations/22.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Methodology1">Statistical Methodology 1</h3>
<script type="text/javascript">roomInfo("c3","Helle Sørensen");</script>
<p><a href="./contributed_talks#205">TAM: An R Package for Item Response Modelling</a>
(Thomas Kiefer) [<a href="./presentations/205.pdf">slides</a>]</p>
<p><a href="./contributed_talks#124">gets: General-to-Specific (GETS) Modelling</a>
(Genaro Sucarrat) [<a href="./presentations/124.pdf">slides</a>]</p>
<p><a href="./contributed_talks#50">R Package CASA: Component Automatic Selection in Additive models</a>
(Thouvenot Vincent)</p>
<p><a href="./contributed_talks#78">Dose-response analysis using R revisited</a>
(Christian Ritz)</p>
<p><a href="./contributed_talks#59">Changepoints over a Range of Penalties using the changepoint package</a>
(Kaylea Haynes) [<a href="./presentations/59.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="ML1">Machine Learning 1</h3>
<script type="text/javascript">roomInfo("c4","Poul Svante Eriksen");</script>
<p class="cancelled"><a href="./contributed_talks#81">Word Alignment tools in R</a>
(Neda Daneshgar / Majid Sarmad)</p>
<p><a href="./contributed_talks#70">Rapid detection of spatiotemporal clusters</a>
(Markus Loecher) [<a href="./presentations/70.pdf">slides</a>]</p>
<p><a href="./contributed_talks#79">Scalable distributed random-forest in R</a>
(Arash Fard, Vishrut Gupta) [<a href="./presentations/79.pptx">slides</a>]</p>
<p><a href="./contributed_talks#105">Multivariate analysis of mixed data: The PCAmixdata R package</a>
(Marie Chavent)</p>
<p><a href="./contributed_talks#62">PPforest</a>
(Natalia da Silva) [<a href="./presentations/62.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Visualisation1">Visualisation 1</h3>
<script type="text/javascript">roomInfo("c5","Di Cook");</script>
<p><a href="./contributed_talks#150">Reordering and selecting continuous variables for scatterplot matrices</a>
(Katrin Grimm) [<a href="./presentations/150.pdf">slides</a>]</p>
<p><a href="./contributed_talks#53">R-package to assess and visualize the calibration of multiclass risk predictions</a>
(Kirsten Van Hoorde) [<a href="./presentations/53.html">slides</a>]</p>
<p><a href="./contributed_talks#20">tmap: creating thematic maps in a flexible way</a>
(Martijn Tennekes) [<a href="./presentations/20.pdf">slides</a>]</p>
<p><a href="./contributed_talks#19">The dendextend R package for manipulation of dendograms, visualization and comparison</a>
(Tal Galili) [<a href="./presentations/19.pptx">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>



<h2 id="session6">Session 6 &ndash; Thursday 16:00 - 17:30</h2>
<h3 id="kaleidoscope-6">Kaleidoscope 6</h3>
<script type="text/javascript">roomInfo("c1","Susan Holmes");</script>
<p><a href="./contributed_talks#231">The METACRAN experiment</a>
(Gabor Csardi) [<a href="./presentations/231.pdf">slides</a>]</p>
<p><a href="./contributed_talks#153">Using R in photobiology</a>
(Pedro J. Aphalo) [<a href="./presentations/153.pdf">slides</a>]</p>
<p><a href="./contributed_talks#101">Industrial Big Data Analytics for Wind Turbines</a>
(Sven Jesper Knudsen) [<a href="./presentations/101.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Teaching2">Teaching 2</h3>
<script type="text/javascript">roomInfo("c2","Helle Sørensen");</script>
<p><a href="./contributed_talks#248">Web Application Teaching Tools for Statistics Using Shiny and R</a>
(Gail Potter) [<a href="./presentations/248.pdf">slides</a>]</p>
<p><a href="./contributed_talks#249">Teaching R in (an online) class</a>
(Jonathan Cornelissen) [<a href="./presentations/249.pdf">slides</a>]</p>
<p><a href="./contributed_talks#204">Teaching R using the github ecosystem</a>
(Colin Rundel) [<a href="./presentations/204.pdf">slides</a>]</p>
<p><a href="./contributed_talks#134">Using R, RStudio, and Docker for introductory statistics teaching</a>
(Mine Cetinkaya-Rundel) [<a href="./presentations/134.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Methodology2">Statistical Methodology 2</h3>
<script type="text/javascript">roomInfo("c3","James Curran");</script>
<p><a href="./contributed_talks#120">seasonal: An X-13 interface for seasonal adjustment</a>
(Christoph Sax) [<a href="./presentations/120.pdf">slides</a>]</p>
<p><a href="./contributed_talks#84">Estimating the Linfoot correlation in R</a>
(Sören Möller) [<a href="./presentations/84.pdf">slides</a>]</p>
<p><a href="./contributed_talks#135">Seasonal Adjustment with the R packages x12 and x12GUI</a>
(Alexander Kowarik) [<a href="./presentations/135.pdf">slides</a>]</p>
<p><a href="./contributed_talks#162">frailtyHL: R package for variable selection in general frailty models for various survival data</a>
(Il Do Ha)</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="ML2">Machine Learning 2</h3>
<script type="text/javascript">roomInfo("c4","Poul Svante Eriksen");</script>
<p class="cancelled"><a href="./contributed_talks#75">Massive Online Data Stream Mining using R and MOA</a>
(Jan Wijffels)</p>
<p><a href="./contributed_talks#300">Microsoft Azure Machine Learning with R</a> (Stephen Elston) [<a href="./presentations/300.pdf">slides</a>]</p>
<p><a href="./contributed_talks#170">forestFloor: a package to visualize and comprehend the full curvature of random forests</a>
(Søren Havelund Welling) [<a href="./presentations/170.pdf">slides</a>]</p>
<p><a href="./contributed_talks#130">Machine Learning for Internal Product Measurement</a>
(Douglas Mason)</p>
<p><a href="./contributed_talks#106">h2oEnsemble for Scalable Ensemble Learning in R</a>
(Erin LeDell) [<a href="./presentations/106.pdf">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

<h3 id="Visualisation2">Visualisation 2</h3>
<script type="text/javascript">roomInfo("c5","Hadley Wickham");</script>
<p><a href="./contributed_talks#61">Plotting data as music videos in R</a>
(Thomas Levine) [<a href="https://thomaslevine.com/!/user-2015/?slides">io slides</a> / <a href="https://thomaslevine.com/!/user-2015/">static slides</a>]</p>
<p><a href="./contributed_talks#116">NaviCell Web Service for Network-based Data Visualization</a>
(Eric Bonnet) [<a href="./presentations/116.pdf">slides</a>]</p>
<p><a href="./contributed_talks#52">Easy visualizations of high-dimensional genomic data</a>
(Laure Cougnaud) [<a href="./presentations/52.zip">material as zip file</a>]</p>
<p><a href="./contributed_talks#14">The gridGraphics Package</a>
(Paul Murrell) [<a href="https://www.stat.auckland.ac.nz/~paul/Talks/useR2015/gridgraphics.html">slides</a>]</p>
<p style="text-align: right;"><script type="text/javascript">linkMe();</script></p>

