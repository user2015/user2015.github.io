<h1>Contributed Talks</h1>

<script type="text/javascript">
function GoBack(a){
  if(window.location.hash) {
	var hh = window.location.hash.substring(1);
 	if(hh === a){ document.write('<a href="javascript: history.go(-1)">Go back</a>'); }
} else {
  // Fragment doesn't exist
}
}

$(function () {

    var active = true;

    $('#collapse-init').click(function () {
        if (active) {
            active = false;
            $('.collapse').collapse('show');
            $('.panel-title').attr('data-toggle', '');
            $(this).text('Collapse all abstracts');
        } else {
            active = true;
            $('.collapse').collapse('hide');
            $('.panel-title').attr('data-toggle', 'collapse');
            $(this).text('Expand all abstracts');
        }
    });
    
    $('#accordion').on('show.bs.collapse', function () {
        if (active) $('#accordion .in').collapse('hide');
    });

});

function sessionInfo(a){
	switch(a){
	 case "kaleidoscope1":
	   var session = "Kaleidoscope 5";
	   var target = "kaleidoscope-5";
	   var time = "Thursday 13:00-14:30";
	   break;
	 case "Ecology":
	   var session = "Ecology";
	   var target = "Ecology";
	   var time = "Wednesday 10:30-12:00";
	   break;
	 case "Networks":
	   var session = "Networks";
	   var target = "Networks";
	   var time = "Wednesday 10:30-12:00";
	   break;
	 case "Reproducibility":
	   var session = "Reproducibility";
	   var target = "Reproducibility";
	   var time = "Wednesday 10:30-12:00";
	   break;
	 case "Interfacing":
	   var session = "Interfacing";
	   var target = "Interfacing";
	   var time = "Wednesday 10:30-12:00";
	   break;
	 case "kaleidoscope2":
	   var session = "Kaleidoscope 2";
	   var target = "kaleidoscope-2";
	   var time = "Wednesday 13:00-14:30";
	   break;
	 case "Casestudy":
	   var session = "Case study";
	   var target = "Casestudy";
	   var time = "Wednesday 13:00-14:30";
	   break;
	 case "Clustering":
	   var session = "Clustering";
	   var target = "Clustering";
	   var time = "Wednesday 13:00-14:30";
	   break;
	 case "Datamanagement":
	   var session = "Data Management";
	   var target = "Datamanagement";
	   var time = "Wednesday 13:00-14:30";
	   break;
	 case "Computational":
	   var session = "Computational Performance";
	   var target = "Computational";
	   var time = "Wednesday 13:00-14:30";
	   break;
	 case "kaleidoscope3":
	   var session = "Kaleidoscope 3";
	   var target = "kaleidoscope-3";
	   var time = "Wednesday 16:00-17:30";
	   break;
	 case "Business":
	   var session = "Business";
	   var target = "Business";
	   var time = "Wednesday 16:00-17:30";
	   break;
	 case "Spatial":
	   var session = "Spatial";
	   var target = "Spatial";
	   var time = "Wednesday 16:00-17:30";
	   break;
	 case "Databases":
	   var session = "Databases";
	   var target = "Databases";
	   var time = "Wednesday 16:00-17:30";
	   break;
	 case "kaleidoscope4":
	   var session = "Kaleidoscope 4";
	   var target = "kaleidoscope-4";
	   var time = "Thursday 10:30-12:00";
	   break;
	 case "Medicine":
	   var session = "Medicine";
	   var target = "Medicine";
	   var time = "Thursday 10:30-12:00";
	   break;
	 case "Regression":
	   var session = "Regression";
	   var target = "Regression";
	   var time = "Thursday 10:30-12:00";
	   break;
	 case "Regression":
	   var session = "Regression";
	   var target = "Regression";
	   var time = "Thursday 10:30-12:00";
	   break;
	 case "Regression":
	   var session = "Regression";
	   var target = "Regression";
	   var time = "Thursday 10:30-12:00";
	   break;
	 case "Commercial":
	   var session = "Commercial Offerings";
	   var target = "Commercial";
	   var time = "Thursday 10:30-12:00";
	   break;
	 case "Interactive":
	   var session = "Commercial Offeringss";
	   var target = "Interactive";
	   var time = "Thursday 10:30-12:00";
	   break;
	 case "kaleidoscope5":
	   var session = "Kaleidoscope 1";
	   var target = "kaleidoscope-1";
	   var time = "Wednesday 10:30-12:00";
	   break;
	 case "Teaching1":
	   var session = "Teaching 1";
	   var target = "Teaching1";
	   var time = "Thursday 13:00-14:30";
	   break;
	 case "Methodology1":
	   var session = "Statistical Methodology 1";
	   var target = "Methodology1";
	   var time = "Thursday 13:00-14:30";
	   break;
	 case "ML1":
	   var session = "Machine Learning 1";
	   var target = "ML1";
	   var time = "Thursday 13:00-14:30";
	   break;
	 case "Visualisation1":
	   var session = "Visualisation 1";
	   var target = "Visualisation1";
	   var time = "Thursday 13:00-14:30";
	   break;
	 case "kaleidoscope6":
	   var session = "Kaleidoscope 6";
	   var target = "kaleidoscope-6";
	   var time = "Thursday 16:00-17:30";
	   break;
	 case "Teaching2":
	   var session = "Teaching 2";
	   var target = "Teaching2";
	   var time = "Thursday 16:00-17:30";
	   break;
	 case "Methodology2":
	   var session = "Statistical Methodology 2";
	   var target = "Methodology2";
	   var time = "Thursday 16:00-17:30";
	   break;
	 case "ML2":
	   var session = "Machine Learning 2";
	   var target = "ML2";
	   var time = "Thursday 16:00-17:30";
	   break;
	 case "Visualisation2":
	   var session = "Visualisation 2";
	   var target = "Visualisation2";
	   var time = "Thursday 16:00-17:30";
	   break;
	 default:
	   var session = "No session";
	   var target = "overview";
	   var time = "No time";
	   break;
	}
	document.write('<i>In <a href="./oral_sessions#' + target + '">' + session + '</a> session, ' + time + '.</i> ');
}

</script>

<h2>Prepare your talk</h2>
<p>
Before useR! 2011, Di Cook and Rob Hyndman wrote two excelllent short communications about giving presentations at useR! conferences.
These were published in the R Journal (Volume 3/1, June 2011). The tips and suggestions are still valid and a good reminder:
<p><a href="http://journal.r-project.org/archive/2011-1/RJournal_2011-1_Hyndman.pdf" target="_blank">Giving a useR! Talk (Rob J. Hyndman)</a></p>
<p><a href="http://journal.r-project.org/archive/2011-1/RJournal_2011-1_Cook.pdf" target="_blank">Tips for Presenting Your Work (Dianne Cook)</a></p>
</p>

<i><b>Technical details:</b></i><br>
<p>Note that <b>Kaleidoscope</b> and <b>Focus</b> contributed talks, will be scheduled for 15 minutes,
followed by 2-3 minutes discussion. It is possible to use either your own computer or the one in the room.

<p>There will be laptops in each conference room that can be used during the presentation.
These computers will come with Windows, Microsoft Office (for PowerPoint) and Adobe Reader (for pdf slides).
If your presentation contains demostration in R or web browser we recommend that you bring your own laptop.
The projectors connect via VGA port. For the <b>Kaleidoscope sessions</b> the aspect ratio is 16:9 (1920 x 1080) 
and for <b>Focus Sessions</b> the aspect ratio is 4:3 (1024 x 768).
</p>

<h2>List of titles</h2>

<p>Lists of confirmed speakers sorted by presentation title. Click for: <a href="./lightning_talks">Lightning Talks</a>.</p>

<p>For abstracts click on the title (<a id="collapse-init" style="cursor: pointer;">Expand all abstracts</a>).
</p>
<dl>
  <dt id="51" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-51" style="cursor: pointer;">A better way to manage hierarchical data</a> <span style="font-weight: normal; font-style: italic;">(Christoph Glur)</span></dt>
  <dd id="a-51" class="collapse"><p style="padding-top: 0.5em;">Christoph Glur:</p><blockquote>Data management is a huge time killer. This is especially true if you are working with data that is inherently non-tabular. The forthcoming data.tree package lets you organise hierarchical data in tree structures, and apply functions to the data by traversing the tree.
In this presentation, I will cover the following subjects:
<ol>
<li>what is hierarchical data, and in what areas is it used (decision trees, finance, computer science, etc.)</li>
<li>what is reference semantics, and why is it useful when building trees / quick intro to reference classes and R6</li>
<li>features of the data.tree package
 <ol type="i">
  <li>building data.trees from scratch</li>
  <li>converting to and from data.frame</li>
  <li>tree traversal</li>
 </ol>
</li>
<li>applications
 <ol type="i">
  <li>ID3</li>
  <li>AHP (Analytic Hierarchy Process)</li>
  <li>TAA (finance, tactical asset allocation)</li>
 </ol>
</li>
</ol>
</blockquote><p style="text-align: right;">
<script type="text/javascript">sessionInfo("Datamanagement"); GoBack("51");</script></p>
</dd>
  <dt id="141" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-141" style="cursor: pointer;">A Comparative Study of Complex Estimation Software</a> <span style="font-weight: normal; font-style: italic;">(Jonathan Digby-North)</span></dt>
  <dd id="a-141" class="collapse"><p style="padding-top: 0.5em;">Jonathan Digby-North, Survey Methodology and Statistical Computing, Office for National Statistics:</p><blockquote>The Office for National Statistics (ONS) uses sample surveys to provide the UK with key social and economic statistics. For a number of these surveys, the calibration and weighting is implemented via Statistics Canada’s SAS-based Generalized Estimation System (GES). This software, which must first be purchased, can only be used with an appropriate SAS licence.

As part of several ongoing initiatives to explore alternative open source solutions at ONS, this project assesses the feasibility of replacing GES with the free R package ‘ReGenesees’, written and developed by the Italian Statistics Office (Istat). A selection of household and business surveys – each of which currently uses GES for a different task or is unique in some way – was used to compare the two tools in terms of their functionality, performance and ease of use.

The overall conclusion of this project was that the ‘ReGenesees’ R package is a viable (and perhaps favourable) alternative to GES for the Office.
</blockquote><p style="text-align: right;">
<script type="text/javascript">sessionInfo("kaleidoscope1"); GoBack("141");</script></p></dd>
  <dt id="26" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-26" style="cursor: pointer;">A Graphical User Interface for R in an Integrated Development Environment for Ecological Modeling, Scientific Image Analysis and Statistical Analysis</a> <span style="font-weight: normal; font-style: italic;">(Marcel Austenfeld)</span></dt>
  <dd id="a-26" class="collapse"><p style="padding-top: 0.5em;">Marcel Austenfeld, eLK.Medien, University of Kiel:</p><blockquote>For the exploration and analyzing of natural systems many different tools have to be used to derive hypotheses about causal relationships of complex patterns and processes.
 
Model tools can help to analyze uncertain quantities, Image analysis tools to measure real patterns and statistical analysis tools for the structuring, interpretation and presentation of simulated and measured data.

The open source application Bio7 was developed to offer these tools beside a selection of popular programming languages and several Graphical User Interfaces in an Integrated Development Environment based on the Eclipse Rich Client Platform.

This talk provides an overview of the Bio7 R interface containing an advanced R script editor with a debugging interface, a spreadsheet component, some special plotting features and other useful tools for development.
 
In addition some unique and easy to use methods are presented to transfer complex image data from an embedded image interface based on the scientific image analysis software ImageJ.
 
Finally this presentation should also demonstrate the grown usefulness of the Bio7 tools for related disciplines dealing with simulation, image or data analysis.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Ecology"); GoBack("26");</script></p></dd>
  <dt id="34" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-34" style="cursor: pointer;">A proposal for distributed data-structures in R</a> <span style="font-weight: normal; font-style: italic;">(Indrajit Roy, Michael Lawrence)</span></dt>
  <dd id="a-34" class="collapse"><p style="padding-top: 0.5em;">Indrajit Roy, Michael Lawrence, HP Labs (US) and Genentech (US):</p><blockquote>Data sizes continue to increase, while single core performance has stagnated. To scale our computations, we need to distribute datasets across multiple machines.  Thus, R needs standardized, idiomatic abstractions for computing on distributed data structures. R has many packages that provide parallelism constructs as well as bridges to distributed systems such as Hadoop. Unfortunately, each interface has its own syntax, parallelism techniques, and supported platform(s).  As
a consequence, contributors are forced to learn multiple idiosyncratic interfaces, and to restrict each implementation to a particular interface, thus limiting the applicability and adoption of their research and hampering interoperability.

Our proposal is to create a unified API for distributed computing. The API supports three shapes of data --- lists, arrays and data frames--- and enables the loading and basic manipulation of distributed data, including multiple modes of functional iteration (e.g., apply() like operations). In this talk we will discuss the proposed API, and how it
can be implemented on top of existing distributed backends.
</blockquote><p style="text-align: right;">
<script type="text/javascript">sessionInfo("Datamanagement"); GoBack("34");</script></p></dd>
  <dt id="73" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-73" style="cursor: pointer;">A Review of Meta-Analysis Packages in R</a> <span style="font-weight: normal; font-style: italic;">(Joshua R. Polanin & Emily A. Hennessy)</span></dt>
  <dd id="a-73" class="collapse"><p style="padding-top: 0.5em;">Joshua R. Polanin & Emily A. Hennessy, Peabody Research Institute, Vanderbilt University, Nashville, TN, USA:</p><blockquote>A fast-growing market for meta-analytic software is R. Despite the pervasive availability of meta-analytic R packages, only a small number of publications have examined the abilities of these packages (Chen & Pence, 2013; Neupane, Richer, Bonner, Kibret, & Beyene, 2014), and no review to date has comprehensively cataloged each package. As such, the purpose of this project is to delineate the scope and breadth of meta-analytic R packages in order to: a) inform the meta-analytic field of the availability of these packages, b) explore the packages’ power and applicability, c) elucidate future areas of greater package need. 

To answer these questions, we conducted a systematic review of meta-analytic R packages using various aggregators (e.g., CRAN website, Revolution Analytics, Crantastic). The search process yielded 136 potential packages of which 54 provided unique contributions (See online appendix). We coded specific capabilities of each package using a pre-defined codebook (See online appendix). Although the coding process is still ongoing, preliminary results indicated a plethora of traditional functionality (e.g., weighted average calculations, moderator analyses), but few packages for the review stage (i.e., screening or coding) or advanced analyses (i.e., multilevel modeling, graphics). The final results will be available prior to the June conference.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Reproducibility"); GoBack("73");</script></p></dd>
  <dt id="41" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-41" style="cursor: pointer;">Ad-Hoc User-Defined Functions for MonetDB with R</a> <span style="font-weight: normal; font-style: italic;">(Hannes Mühleisen)</span></dt>
  <dd id="a-41" class="collapse"><p style="padding-top: 0.5em;">Hannes Mühleisen, Database Architectures Group, Centrum Wiskunde & Informatica, Amsterdam, The Netherlands:</p><blockquote>Various capable DBI connectors allow R to retrieve data from all major relational databases. Unfortunately, the overhead associated with a plethora of data conversions on the way makes this approach unfeasible as the amount relevant to the analysis grows.
R's support for running as a library allows for a different approach, where a in-database User-Defined Function (UDF) is implemented in R, which is executed as relational operator at query runtime. Here, transfer overhead is greatly reduced, which improves performance. Packages such as PL/R for PostgreSQL have been available for years [1]. 
However, there is still considerable conversion overhead, since traditional databases use the Row-major format for storing data, whereas R is most efficient on columnar data.
We have embedded the R environment into MonetDB [2], an Open Source columnar relational database. The almost identical in-memory representations of MonetDB tables and R data.frame objects allows an efficient handover of data between environments. In our experiments, we were able to outperform PL/R by several orders of magnitude.
In out talk, I will describe how the extension can be used to best leverage the power of both worlds, highly optimized relational operators together with highly specialised statistical methods.

[1] http://www.joeconway.com/plr/
[2] https://www.monetdb.org/content/embedded-r-monetdb</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Databases"); GoBack("41");</script></p></dd>
  <dt id="157" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-157" style="cursor: pointer;">Algorithmic Differentiation for Extremum Estimation: An Introduction Using RcppEigen</a> <span style="font-weight: normal; font-style: italic;">(Matt P. Dziubinski)</span></dt>
  <dd id="a-157" class="collapse"><p style="padding-top: 0.5em;">Matt P. Dziubinski, Department of Mathematical Sciences, Aalborg University, Denmark:</p><blockquote>Algorithmic Differentiation (AD) enables automatic computation of the derivatives of a function implemented as a computer program. It's distinct from the numerical differentiation approximation methods (like finite differences), as it's exact to the maximum extent allowed by the machine precision. At the same time, it's free from the limitations of symbolic differentiation, since it works with actual computer programs (with branches, loops, allocations, and mutation) and not only pure, algebraic expressions.

AD is useful to a wide range of applications – in particular, fitting models via extremum estimators (i.e., estimators obtained as extrema of the given cost functions). This includes calibrating financial models, training machine learning models, or estimating statistical (or econometric) models. Numerical optimization algorithms necessary for model fitting benefit greatly from the high precision of the gradient obtained using AD – with a direct impact on the ultimate results’ precision (more precise and stable parameter estimates, standard errors, confidence intervals).

This talk shows how to use AD from R – making the use of RcppEigen. We shall motivate the problem (including the issues with finite differences), introduce AD, and demonstrate its advantages over numerical approximations with a likelihood estimation example. We will end by speeding up the gradient computation via parallelization.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Computational"); GoBack("157");</script></p></dd>
  <dt id="202" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-202" style="cursor: pointer;">Applying the R Language in Streaming Applications and Business Intelligence</a> <span style="font-weight: normal; font-style: italic;">(Lou Bajuk-Yorgan)</span></dt>
  <dd id="a-202" class="collapse"><p style="padding-top: 0.5em;">Lou Bajuk-Yorgan, TIBCO Software:</p><blockquote>R provides tremendous value to statisticians and data scientists, however they are often challenged to integrate their work and extend that value to the rest of their organization. This presentation will demonstrate how the R language can be used in Business Intelligence applications (such as Financial Planning and Budgeting, Marketing Analysis, and Sales Forecasting) to put advanced analytics into the hands of a wider pool of decisions makers. We will also show how R can be used in streaming applications (such as TIBCO Streambase) to rapidly build, deploy and iterate predictive models for real-time decisions. TIBCO's enterprise platform for the R language, TIBCO Enterprise Runtime for R (TERR) will be discussed, and examples will include fraud detection, marketing upsell and predictive maintenance.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Commercial"); GoBack("202");</script></p></dd>
  <dt id="126" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-126" style="cursor: pointer;">Approximately Exact Calculations for Linear Mixed Models</a> <span style="font-weight: normal; font-style: italic;">(Andrew Bray)</span></dt>
  <dd id="a-126" class="collapse"><p style="padding-top: 0.5em;">Andrew Bray, Mathematics Department, Reed College, Portland, Oregon, USA:</p><blockquote>One of the primary ways that statisticians learn about a linear mixed model in the context of a given data set is to consider the restricted likelihood (RL) function or the joint posterior. Of particular interest are the regions of the parameter space where these functions are high. These regions are traditionally found using general optimizing algorithms that may fail to find the global optimum. In this talk we present a method to optimize the RL function and posterior that is specific to mixed models with two variances. It is a branch and bound algorithm that evaluates the function to an arbitrary degree of precision within a given region of the parameter space, ensuring that no optima are excluded.

The algorithm has been implemented in R with attention paid to making the computing time comparable to the existing algorithms used in the popular lme4 package. We will discuss the approaches to implementation that we have tried, and compare their resulting performance.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Regression"); GoBack("126");</script></p></dd>
  <dt id="159" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-159" style="cursor: pointer;">Architect. An IDE for Data Science (and R)</a> <span style="font-weight: normal; font-style: italic;">(Tobias Verbeke)</span></dt>
  <dd id="a-159" class="collapse"><p style="padding-top: 0.5em;">Tobias Verbeke, Open Analytics NV:</p><blockquote>The life of a data scientist is a perilous adventure requiring many skills and good nerves.
On Monday you write a Spark algorithm in Scala, on Tuesday you spin a Java image processing
task in the cloud. Wednesday a Postgres DB needs your attention and Thursday you tweek
an interactive visualization in Python. Finally on Friday you give your R packages some love.
How to make sure you reach the weekend without getting insane? You open Architect on Monday 
morning and close it Friday evening.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope3"); GoBack("159");</script></p></dd>
  <dt id="185" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-185" style="cursor: pointer;">archivist: Tools for Storing, Restoring and Searching for R Objects</a> <span style="font-weight: normal; font-style: italic;">(Przemyslaw Biecek)</span></dt>
  <dd id="a-185" class="collapse"><p style="padding-top: 0.5em;">Przemyslaw Biecek, University of Warsaw, Poland:</p><blockquote>Open science needs not only reproducible research but also accessible final and partial results. The archivist package supports the storing, restoring and searching for an R objects easy. Want to share your object with article reviewers or collaborators? This package should help.

Data exploration and modelling is a process in which a lot of data artifacts are produced. Artifacts like: subsets, data aggregates, plots, statistical models, different versions of data sets and different versions of results. The more projects we work with the more artifacts are produced and the harder it is to manage these artifacts. Archivist helps to store and manage artifacts created in R. Archivist allows you to store selected artifacts as a binary files together with their metadata and relations. Archivist allows to share artifacts with others, either through shared folder or github. Archivist allows to look for already created artifacts by using it's class, name, date of the creation or other properties. Makes it easy to restore such artifacts. Archivist allows to check if new artifact is the exact copy that was produced some time ago. That might be useful either for testing or caching.

</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope2"); GoBack("185");</script></p></dd>
  <dt id="201" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-201" style="cursor: pointer;">Bringing Geospatial Tasks into the Mainstream of Business Analytics</a> <span style="font-weight: normal; font-style: italic;">(Ian Cook)</span></dt>
  <dd id="a-201" class="collapse"><p style="padding-top: 0.5em;">Ian Cook, TIBCO Software Inc.:</p><blockquote>Businesses capture vast amounts of geospatial and location data. But historically, most business data analysts have lacked the tools and knowledge necessary to perform even basic manipulation and analysis of geospatial data. Traditionally, working with geospatial data required geographic information systems (GIS) software and specialists. In recent years, this has changed. Many R packages for working with geospatial data are available, and R has been integrated with mainstream business analytics software, enabling users to perform R-based tasks without writing R code. As a result, many geospatial data manipulation and analysis tasks are within the reach of business data analysts, and businesses can derive value from geospatial and location data with reduced complexity and cost.

Several basic geospatial data tasks will be demonstrated using TIBCO Spotfire and TIBCO Enterprise Runtime for R (TERR), including transformation of coordinate reference systems, spatial overlay, and calculation of geographical distances and areas. The R packages `sp`, `rgdal`, `geosphere`, and `wkb` will be used. Advanced geospatial analysis tasks will be briefly mentioned.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Spatial"); GoBack("201");</script></p></dd>
  <dt id="98" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-98" style="cursor: pointer;">Building ecological models bit-by-bit</a> <span style="font-weight: normal; font-style: italic;">(David L Miller)</span></dt>
  <dd id="a-98" class="collapse"><p style="padding-top: 0.5em;">David L Miller, Centre for Research into Ecological and Environmental Modelling, University of St Andrews, St Andrews, Scotland:</p><blockquote>Many models that we build rely on combining several components, often representing different processes at work in the system. For example in ecology we may have a component for detectability of the species by observers, one for whether the animals are available, one describing their spatial distribution.

Defining such a complex model in R can result in writing a very long call to a particular function, which may or may not work at any point. Since these processes are often (conditionally) independent, we can separate these components in the likelihood and code. Using the + operator we can then combine them in a simple way that's easy for those doing the modelling to understand. Since each step produces an object, we can perform model validation, diagnostics and checking during construction.

Through an example applied to distance sampling, I'll show an example of this kind of approach to model building and propose some other situations where this kind of strategy may also be useful. I hope this will provoke some debate on the user friendliness of modelling packages and their interfaces.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Ecology"); GoBack("98");</script></p></dd>
  <dt id="59" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-59" style="cursor: pointer;">Changepoints over a Range of Penalties using the changepoint package</a> <span style="font-weight: normal; font-style: italic;">(Kaylea Haynes)</span></dt>
  <dd id="a-59" class="collapse"><p style="padding-top: 0.5em;">Kaylea Haynes, Statistics and Operational Research (STOR-i), Lancaster University, United Kingdom:</p><blockquote>The changepoint package (Killick and Eckley 2014) is designed to implement various changepoint methods for finding single and multiple changepoints within data.   In particular it provides an implementation of the PELT (Pruned Exact Linear Time) algorithm (Killick et al., 2012), which, under certain conditions, has a computational cost linear in the number of data points.  The main challenge with this method is it requires a penalty value to be chosen, and this choice can substantially affect the accuracy of the estimated changepoints.   To overcome this problem we have developed a new method, CROPS (Changepoints over a Range of PenalteS), (Haynes et al., 2014), which allows one to obtain optimal changepoint segmentations of data sequences for all penalty values across a continuous range.  The computational complexity of this approach can be linear in the number of data points and linear in the optimal segmentations for the smallest and largest penalty values.   This algorithm is implemented in the latest release of the changepoint package. 
This talk will introduce our new algorithm CROPS which we will illustrate on both simulated and empirical data sets using the changepoint package.   We will also highlight some of the new features of the recently updated changepoint package.  
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Methodology1"); GoBack("59");</script></p></dd>
  <dt id="22" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-22" style="cursor: pointer;">Classroom experiments</a> <span style="font-weight: normal; font-style: italic;">(James Curran)</span></dt>
  <dd id="a-22" class="collapse"><p style="padding-top: 0.5em;">James Curran, Department of Statistics, University of Auckland, Auckland, New Zealand:</p><blockquote>It is often very difficult to motivate the ideas of experimental design and ANOVA to students who have never actually performed an experiment. This is further compounded by having a class size of ~250. In this talk I will briefly discuss a simple R based timing experiment that originally arose from research. This experiment was made student-specific, meaning each student would have slightly different results. I will talk about how the students handled this problem and how we used distributed processing to compare their results with the expected result.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Teaching1"); GoBack("22");</script></p></dd>
  <dt id="66" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-66" style="cursor: pointer;">Coding for the enterprise server - what does it mean for you?</a> <span style="font-weight: normal; font-style: italic;">(Friedrich Schuster)</span></dt>
  <dd id="a-66" class="collapse"><p style="padding-top: 0.5em;">Friedrich Schuster, HMS Analytical Software GmbH, Heidelberg, Germany:</p><blockquote>For a data scientist, working with R typically means analyzing data for a particular task in a scientific context. As an R developer you will also be familiar with package development and associated tools and techniques.

Today R is also used for mission critical applications in production environments of large organizations. In this context an R developer faces a different, sometimes difficult situation with new challenges.

Some keywords concerning technical requirements are: reliability and high availability, scalability, compatibility and interoperability, security, maintainability. Other (non-technical) concerns are important as well: economic aspects (e.g. total cost of ownership), organizational aspects (different roles and responsibilities, collaboration in larger teams), and even legal requirements.

This presentation gives an overview of the factors that are important for the work of a developer in a corporate environment. It also tries to give some technical and non-technical advice for developing and maintaining client-server solutions with R.

</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope3"); GoBack("66");</script></p></dd>
  <dt id="72" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-72" style="cursor: pointer;">Computational Precision and Floating-Point Arithmetic: A Teacher's Guide to Answering FAQ 7.31</a> <span style="font-weight: normal; font-style: italic;">(Richard M. Heiberger)</span></dt>
  <dd id="a-72" class="collapse"><p style="padding-top: 0.5em;">Richard M. Heiberger, Department of Statistics, Temple University, Philadelphia, PA, USA:</p><blockquote>Beginners ask questions like "Why does .3 + .6 not equal .9?"  Experts
always reply "See FAQ 7.31".  The answer in the FAQ is correct,
yet probably not helpful to the Beginner.

I show several simple arithmetic and algebra statements whose
machine-calculated values differ from the values the real number
system would provide.  I explicitly show the floating-point bit
patterns for the numbers, and show why the calculated answer is
correct in the floating-point system.

Double precision floating-point numbers use 53 significant bits (about
16 decimal digits).  It is difficult for beginners to follow details
that depend on behavior in the 53rd bit (16th decimal digit).

I make a pedagogical simplification by using low-precision
floating-point numbers (5 significant bits).  It is easier to follow
unanticipated behavior at 1.5 decimal digits than at 16 decimal
digits.

I use the Rmpfr package to work with the 5-bit numbers.  While Rmpfr
is motivated for increased precision, it works well with reduced
precision.  Rmpfr automates the apparently simple technique of
"rounding at all intermediate steps".  Students have trouble detecting
"all" intermediate steps and some trouble with correct rounding
(round-to-even) at each step.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope2"); GoBack("72");</script></p></dd>
  <dt id="195" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-195" style="cursor: pointer;">CXXR: Modernizing the R Interpreter</a> <span style="font-weight: normal; font-style: italic;">(Karl Millar)</span></dt>
  <dd id="a-195" class="collapse"><p style="padding-top: 0.5em;">Karl Millar, Google:</p><blockquote>CXXR is a project to refactor the internals of the current R interpreter using C++ and modern software engineering techniques.


The goal of the project is to produce a fully compatible, open source, production quality R implementation suitable for everyday use but with significantly better performance than current R implementations.


Many techniques that are used to achieve high performance in languages such as Python and JavaScript are also applicable to the R language, so similar performance is likely to be achievable.  Additionally, the Riposte project has demonstrated that the loop fusion and automatic parallelization techniques of
vector languages, such as APL, can be used to significantly accelerate and parallelize well-vectorized R code.


We demonstrate the progress that has been made towards these
goals so far and discuss the roadmap to a fast, robust R
implementation.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Interfacing"); GoBack("195");</script></p></dd>
  <dt id="177" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-177" style="cursor: pointer;">D3 and R Shiny – Making your graphs come to life</a> <span style="font-weight: normal; font-style: italic;">(Monika Huhn; Jesper Havsol; Daniel Goude; Martin Karpefors)</span></dt>
  <dd id="a-177" class="collapse"><p style="padding-top: 0.5em;">Monika Huhn; Jesper Havsol; Daniel Goude; Martin Karpefors, Biometric & Information Sciences, AstraZeneca, Molndal, Sweden:</p><blockquote>The human visual perception system has an extraordinarily capacity for graphical interpretation, and an effective visualization will therefore make complex data more accessible, understandable and usable. What makes the visualizations even more powerful is the addition of interactivity to the plots, which will empower less technical collaborators to explore otherwise hidden information. Furthermore, animating data over time can reveal important temporal patterns.

Currently available visualization tools often fall short of providing easy-to-use and visually attractive animation functionalities. In this talk, we show how the combination of interactivity, provided by the R Shiny package, and dynamics, provided by the D3.js javascript package, can bring a new dimension to the analyses. 

D3 has unlimited flexibility and very good data transition capabilities and the R Shiny package enables interactive web applications straight from R. Consequently, connecting these two pieces with the excellent data manipulation properties in R, results in a powerful web application.
The application was originally developed to enable clinicians to look at medical data and investigate changes over time, but could be useful in any field carrying time-changing information.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Interactive"); GoBack("177");</script></p></dd>
  <dt id="129" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-129" style="cursor: pointer;">Data Driven Customer Segmentation with R</a> <span style="font-weight: normal; font-style: italic;">(Jim Porzak)</span></dt>
  <dd id="a-129" class="collapse"><p style="padding-top: 0.5em;">Jim Porzak, DS4CI, El Cerrito, CA, USA:</p><blockquote>To make strategic and tactical decisions businesses need to understand their customers. Simple, easy-to-understand, slowly varying segments are best for strategic decisions. Tactical marketers, on the other hand, need real time actionable segments.  In general, the resulting segments need to make sense to the business user whether in senior management, marketing, sales, or product management.

We will cover four case studies showing how customer segmentation is done to satisfy strategic and tactical requirements. Specific R packages are referenced and simplified R code is shown.  

The case studies are 
1) Tenure based segments – based on a variation of survival analysis, 
2) Recency/Frequency/Monetization (RMF) based segments using simple visualizations, 
3) Cluster based segments using the flexclust package, 
4) Life stage based segments using the TraMineR package.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Business"); GoBack("129");</script></p></dd>
  <dt id="173" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-173" style="cursor: pointer;">dgRaph: Discrete factor graphs in R</a> <span style="font-weight: normal; font-style: italic;">(Henrik Tobias Madsen)</span></dt>
  <dd id="a-173" class="collapse"><p style="padding-top: 0.5em;">Henrik Tobias Madsen, BiRC and MOMA, Aarhus University, Denmark:</p><blockquote>Factor graphs provide a flexible and general framework for specifying probability distributions. Well-known models such as Hidden Markov Models and Mixture models can be cast into the framework yielding a graph structure that easily reveals the dependency structure. 


dgRaph is an R-package for inference and significance evaluation in discrete factor graphs. 


Factor graphs can be specified, plotted and manipulated using familiar R data structures and functions. We implement some standard algorithms; sum-product to infer likelihood and posterior distribution of hidden variables, max-sum for inferring most probable state of hidden variables, the EM-algorithm for inferring parameters.

Furthermore dgRaph contains two novel methods for comparison of a null and a foreground model, with identical graph structure but different sets of potentials. We evaluate the probability of an observation with larger log-odds score under the null-model. The first method is importance sampling where the importance sampling distribution is automatically chosen [1]. The second is employing saddlepoint approximation [2].

The R-package binds a C++-library using Rcpp. Thus carrying out the time-consuming recursive calculations in low-level, compiled code, still having the interactivity and flexibility of R.

dgRaph will be released soon to CRAN until then it can be installed from [github].
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope5"); GoBack("173");</script></p></dd>
  <dt id="31" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-31" style="cursor: pointer;">Dirichlet process Bayesian clustering with the R package PReMiuM</a> <span style="font-weight: normal; font-style: italic;">(Silvia Liverani)</span></dt>
  <dd id="a-31" class="collapse"><p style="padding-top: 0.5em;">Silvia Liverani, Department of Mathematics, Brunel University London, UK:</p><blockquote>PReMiuM is a recently developed R package for Bayesian clustering using a Dirichlet process mixture models. It is an alternative to regression models, non-parametrically linking a response vector to covariate data through cluster membership (Liverani et al, Journal of Statistical Software, 2015). Posterior inference is carried out by using Markov chain Monte Carlo simulation and to allow for fast computations, all essential methods in the package are based on efficient C++ code. 

The model allows binary, categorical, count, survival and continuous response, as well as continuous and discrete covariates. Additionally, predictions may be made for the response, and missing values for the covariates are handled. Several samplers and label switching moves are implemented along with diagnostic tools to assess convergence (Hastie et al, Statistics and Computing, 2014). A number of R functions for post-processing of the output are also provided. In addition to fitting mixtures, it is also possible to determine which covariates actively drive the mixture components. 

This talk will include an overview of the features of the package and some of its applications to date.

</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Clustering"); GoBack("31");</script></p></dd>
  <dt id="174" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-174" style="cursor: pointer;">Distributed computing with R</a> <span style="font-weight: normal; font-style: italic;">(Balasubramanian Narasimhan)</span></dt>
  <dd id="a-174" class="collapse"><p style="padding-top: 0.5em;">Balasubramanian Narasimhan, Health Research and Policy & Statistics, Stanford University, Stanford, CA, USA:</p><blockquote>Bringing together the information latent in distributed medical
databases promises to personalize medical care by enabling reliable,
stable modeling of outcomes with rich feature sets (including patient
characteristics and treatments received). However, there are barriers
to aggregation of medical data, due to lack of standardization of
ontologies, privacy concerns, proprietary attitudes toward data, and a
reluctance to give up control over end use. Statisticians have long
known that aggregation of data is not always necessary for model
fitting. In models based on maximizing a likelihood, the computations
can be distributed, with aggregation limited to the intermediate
results of calculations on local data, rather than raw data. We
describe an R package distcomp to enable such computations and present
several examples.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope3"); GoBack("174");</script></p></dd>
  <dt id="78" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-78" style="cursor: pointer;">Dose-response analysis using R revisited</a> <span style="font-weight: normal; font-style: italic;">(Christian Ritz)</span></dt>
  <dd id="a-78" class="collapse"><p style="padding-top: 0.5em;">Christian Ritz, Department of Nutrition, Exercise and Sports, University of Copenhagen, Denmark:</p><blockquote>Over the last 20 years the open-source environment R has developed into an extremely powerful statistical computing environment. The availability of such a programming infrastructure has in turn fuelled the development of highly sophisticated smaller and larger sub systems for more or less specialized statistical analyses within a number of scientific areas (e.g., the bionconductor suite of packages). One such specialized sub system is provided mainly through the add-on package drc (abbreviation of dose-response curves). Originally, back in 2004, drc was designed as a package for provided model fitting and plotting functionality for very specialized analyses that were routinely carried in weed science. 

Over the last decade the package has been modified and extended substantially, mostly in response to numerous inquiries and questions from the user community. Consequently, the package has developed into a very flexible and versatile package for dose-response analysis in general. Applications are found across a wide range disciplines from animal production over medical research to environmental toxicology. Also, the package is used both in academia and industry. 

We will briefly outline the key functionality of drc. Furthermore, we will demonstrate some recent major extensions. Finally, we will indicate some directions for future development and research.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Methodology1"); GoBack("78");</script></p></dd>
  <dt id="52" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-52" style="cursor: pointer;">Easy visualizations of high-dimensional genomic data</a> <span style="font-weight: normal; font-style: italic;">(Laure Cougnaud)</span></dt>
  <dd id="a-52" class="collapse"><p style="padding-top: 0.5em;">Laure Cougnaud, Open Analytics, Antwerpen, Belgium:</p><blockquote>The high dimensionality of genomic data makes the task of
extracting and representing the main patterns and features of the data quite complex. This is especially the case for an experiment with many covariates or biological conditions (treatments).

The talk will focus on known and less well-known visualizations of such genomic data, especially in the context of the analysis of microarray experiments.

Representations of spectral maps, techniques based on neighbouring methods such as t-SNE (T-Distributed Stochastic Neighbor Embedding) or traditional linear discriminant
analysis will be adressed in the genomic context.
A dedicated R package will be presented which uses the
ExpressionSet class (for easier storage of genomic data and its
annotation) to integrate well with the Bioconductor workflow. The
visualization logic is based on proper aesthetic mappings with ggplot2 whereas interactivity is offered via RMarkdown and Shiny.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Visualisation2"); GoBack("52");</script></p></dd>
  <dt id="8" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-8" style="cursor: pointer;">Enabling R for Big Data with PL/R and PivotalR: Real World Examples on Hadoop &amp; MPP Databases</a> <span style="font-weight: normal; font-style: italic;">(Woo J. Jung)</span></dt>
  <dd id="a-8" class="collapse"><p style="padding-top: 0.5em;">Woo J. Jung, Pivotal:</p><blockquote>Exporting data from Hadoop or a database and importing into a server or desktop environment with R is not an ideal workflow for big data analytics &#150; among many issues, end users may face challenges around the memory/scalability limitations of R and the costs associated with transferring large amounts of data between different platforms. We explore a closer integration of R with big data platforms such as Hadoop and MPP databases (i.e. Pivotal HD, HAWQ, Greenplum Database), focusing on real world examples drawn from the work of data scientists at Pivotal. We describe how open source tools such as PL/R and PivotalR enable R for big data, and walk through case studies from industries such as retail, telco, and utilities that illustrate the flexibility &amp; performance of these extensions. Further, we will also touch on how tools such as PL/R and PivotalR can be leveraged for scalable statistical &amp; machine learning algorithm development on big data platforms, using Bayesian Hierarchical Regression with Gibbs Sampling as an illustrative example. 
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Commercial"); GoBack("8");</script></p></dd>
  <dt id="97" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-97" style="cursor: pointer;">Enhancing reproducibility and collaboration via management of R package cohorts</a> <span style="font-weight: normal; font-style: italic;">(Michael Lawrence)</span></dt>
  <dd id="a-97" class="collapse"><p style="padding-top: 0.5em;">Michael Lawrence, Computational Biology, Genentech, South San Francisco, USA:</p><blockquote>Science depends on collaboration, result reproduction, and the development of supporting software tools. Each of these requires careful management of software versions. We present a unified model for installing, managing, and publishing software contexts in R. It introduces the package manifest as a central data structure for representing version specific, decentralized package cohorts. The manifest points to package sources on arbitrary hosts and in various forms, including tarballs and directories under version control. We provide a high-level interface for creating and switching between side-by-side package libraries derived from manifests. Finally, we extend package installation to support the retrieval of exact package versions as indicated by manifests, and to maintain provenance for installed packages. The provenance information enables the user to publish libraries or sessions as manifests, hence completing the loop between publication and deployment. We have implemented this model across two software packages, switchr and GRANbase, and have released the source code under the Artistic 2.0 license. </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Reproducibility"); GoBack("97");</script></p></dd>
  <dt id="84" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-84" style="cursor: pointer;">Estimating the Linfoot correlation in R</a> <span style="font-weight: normal; font-style: italic;">(Sören Möller)</span></dt>
  <dd id="a-84" class="collapse"><p style="padding-top: 0.5em;">Sören Möller, Epidemiology, Biostatistics and Biodemography, Department of Public Health, University of Southern Denmark, Odense, Denmark:</p><blockquote>In 1957 E. H. Linfoot introduced his measure of correlation based on the mutual information. It is one of the few dependence measures known to fulfil all seven of Renyi's (1959) desirable properties for a dependency measure. Still, the Linfoot correlation is not widely used in practice, as it is relatively hard to estimate.

We demonstrate how the Linfoot correlation can be estimated efficiently in R. We present various non-parametric approaches using numerical integration of kernel densities and k-nearest neighbour estimates. Moreover, we investigate a parametric approach fitting Archimedean copulas to the data. We implement these methods for R in our forthcoming Linfoot package.

We apply these methods to simulated data with known dependency as well as real world data, and compare the Linfoot correlation to the classical Pearson, Spearman and Kendall correlations to investigate the relationship between these measures of dependency. Furthermore, we compare our different approaches of estimation with each other, to check the robustness of our estimates and their dependency on the choice of copula.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Methodology2"); GoBack("84");</script></p></dd>
  <dt id="23" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-23" style="cursor: pointer;">Examining the Environmental Characteristics of Tornado Outbreaks in the United States using Spatial Clustering</a> <span style="font-weight: normal; font-style: italic;">(Thomas Jagger)</span></dt>
  <dd id="a-23" class="collapse"><p style="padding-top: 0.5em;">Thomas Jagger, Geography, Florida State University, Tallahasse Florida, USA:</p><blockquote>We determine tornado outbreaks using median clustering with cluster size estimates using pmak() from the flexible procedures for clustering package. 

The clusters are determined using each tornadoes touchdown latitude and longitude for each day with at least 16 tornadoes. 
We use a generalized linear model to examine the relationship between the characteristics of storms within the clusters to the mean environmental variables within the cluster. 

For the cluster storm characteristics, we use the average kinetic energy of each tornado in the cluster along with the total number of tornadoes and strong tornadoes. For the environmental conditions, we generate cluster regions using an 80 km buffer around the convex hull of tornado touchdown points within each cluster and calculate the mean convective available potential energy, storm relative helicity and wind shear.

We use R code, and provide reproducible code on  R-Pubs using R Markdown and R Presentation from RStudio.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Clustering"); GoBack("23");</script></p></dd>
  <dt id="229" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-229" style="cursor: pointer;">Failing fast and early: assertive/defensive programming for R data analysis pipelines</a> <span style="font-weight: normal; font-style: italic;">(Tony Fischetti)</span></dt>
  <dd id="a-229" class="collapse"><p style="padding-top: 0.5em;">Tony Fischetti, College Factual:</p><blockquote>In data analysis workflows that depend on un-sanitized data sets from external sources, it’s very common that errors in data bring an analysis to a screeching halt. Oftentimes, these errors occur late in the analysis and provide no clear indication of which datum caused the error.

On occasion, the error resulting from bad data won’t even appear to be a data error at all. Still worse, errors in data will pass through analysis without error, remain undetected, and produce inaccurate results.

The solution to the problem is to provide as much information as you can about how you expect the data to look up front so that any deviation from this expectation can be dealt with immediately.

We will talk about using the assertr package which supplies a suite of functions designed to verify assumptions about data early in  analysis pipelines so that data errors are spotted early and can be addressed quickly.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Datamanagement"); GoBack("229");</script></p></dd>
  <dt id="93" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-93" style="cursor: pointer;">Fast, flexible and memory efficient data manipulation using data.table</a> <span style="font-weight: normal; font-style: italic;">(Arunkumar Srinivasan)</span></dt>
  <dd id="a-93" class="collapse"><p style="padding-top: 0.5em;">Arunkumar Srinivasan, Open Analytics:</p><blockquote>Data manipulation operations such as subset, join, aggregation, update etc. are all inherently related. By keeping these related operations together, the data.table package allows for fast and memory efficient data analysis of large data (1GB – 100GB or more in RAM). Although speed benefits are pronounced on larger datasets, many also use it on small data for its concise and consistent syntax. 

Data.table inherits from and extends from data.frame. The general form of its syntax including chaining is:

DT[where, select | update, group by][order by][...][...]

This talk showcases several recent enhancements and features implemented in data.table such as:

<ul>
<li>Efficiently reading file(s) (rbindlist + lapply + fread)</li>
<li>Quick review of reasons behind speed and memory efficiency</li>
<li>Aggregations and updates during joins (by = .EACHI)</li>
<li>Automatic indexing based subsets (using binary search)</li>
<li>Efficient reshaping of multiple columns simultaneously (melt + dcast)</li>
<li>Fast joining over intervals, e.g., genomic data, date ranges (foverlaps)</li>
<li>Fast and memory efficient ordering by reference (setorder)</li>
</ul>

with clear examples and benchmarks on relatively large datasets (~ 1GB to 3GB).
 
References:

M Dowle, T Short, S Lianoglou, A Srinivasan, R Saporta, E Antonyan (2008-2015). Data.table: Extension of data.frame. https://github.com/Rdatatable/data.table

On CRAN: http://cran.r-project.org/web/packages/data.table/index.html
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope4"); GoBack("93");</script></p></dd>
  <dt id="234" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-234" style="cursor: pointer;">Fast, stable and scalable true radix sorting</a> <span style="font-weight: normal; font-style: italic;">(Matt Dowle)</span></dt>
  <dd id="a-234" class="collapse"><p style="padding-top: 0.5em;">Matt Dowle, H2O.ai, California:</p><blockquote>This talk will present the details and benchmarks of the fast and stable radix sort implementation in data.table::forder. For example on 500 million random numerics (4 GB), base R takes approximately 22 minutes vs forder at 2 minutes. The pros and cons of most-significant-digit (forwards) and least-significant-digit (backwards) will be discussed as well as application to all types: integer with large range (&gt;1e5), numeric and character. We hope to find a sponsor from the R core team to help us include this method in base R where it could benefit the community automatically. Package data.table will only be mentioned in passing. The work builds on articles by Terdiman, 2000 and Herf, 2001 and is joint work with Arun Srinivasan.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope4"); GoBack("234");</script></p></dd>
  <dt id="210" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-210" style="cursor: pointer;">fbRads: Analyzing and managing Facebook ads from R</a> <span style="font-weight: normal; font-style: italic;">(Gergely Daroczi)</span></dt>
  <dd id="a-210" class="collapse"><p style="padding-top: 0.5em;">Gergely Daroczi, CARD.com, United States of America:</p><blockquote>Facebook made its ads marketing and ads API generally available in March of 2015, which empowers developers to analyze, report on and manage marketing actions in a programmatic and automated way. As the API is now generally available to the public, CARD.com decided to release its related R code-base in the means of an R package, which facilitates rapid development around data-driven ad management.

The core features of the package includes support for multiple FB accounts, batch queries and automated paging for larger amount of data, query threshold and basic error handling. Besides a number of wrapper functions around the FB marketing API, the package is intended to be modular enough to support other API endpoints as well.

This talk will be the first publicly available introduction on the package features and how to use it, which is to be soon accompanied by a more detailed vignette based on the slides of the talk and feedback collected at the conference.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Networks"); GoBack("210");</script></p></dd>
  <dt id="47" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-47" style="cursor: pointer;">flowcatchR: A user-friendly workflow solution for the analysis of time-lapse cell flow imaging data</a> <span style="font-weight: normal; font-style: italic;">(Federico Marini)</span></dt>
  <dd id="a-47" class="collapse"><p style="padding-top: 0.5em;">Federico Marini, Institute of Medical Biostatistics, Epidemiology and Informatics (IMBEI), Division Biostatistics and Bioinformatics, University Medical Center of the Johannes Gutenberg University Mainz, Germany:</p><blockquote>Automated bioimage analysis is required for reproducible and efficient extraction of information out of time-lapse microscopy data when investigating the in vivo dynamics of complex biological processes. 

We developed a comprehensive workflow solution, based on our R/Bioconductor package flowcatchR, the first capable of effectively handling cell tracking in R. Our solution specifically addresses blood cell flow data, where cells show dynamic behaviors (flowing, rolling). Analysis of the corresponding fast movements is further complicated by cells entering and leaving the field of view, and transitions in and out of focus. 

Subject matter knowledge is incorporated for making analysis feasible. Specifically, we developed a penalty function for a tracking algorithm to account for the directionality of the flowing cells.

Our workflow solution, based on an R package implementing the algorithms, a Shiny App, and Jupyter notebooks, also serves as a proposal for bridging the gap between sophisticated analysis tools and end-user requirements in bioimaging applications. 

Additionally, we use custom-made Docker containers for efficient deployment, for providing subject matter researchers with fully operative environments, where all necessary libraries and dependencies are pre-installed and ready for use. This approach can guarantee high levels of reproducibility while being accessible to a broad range of scientists.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope5"); GoBack("47");</script></p></dd>
  <dt id="170" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-170" style="cursor: pointer;">forestFloor: a package to visualize and comprehend the full curvature of random forests</a> <span style="font-weight: normal; font-style: italic;">(Søren Havelund Welling)</span></dt>
  <dd id="a-170" class="collapse"><p style="padding-top: 0.5em;">Søren Havelund Welling, DTU, Compute; NovoNordisk, Insulin Pharmacology Research:</p><blockquote>forestFloor is an add-on to the randomForest[1] package. It enables users to explore the curvature of a random forest model-fit. In general, for any problem where a random forest have a superior prediction performance, it is of great interest to learn its model mapping. Even within statistical fields where random forest is far from standard practice, such insight from a data driven analysis can give inspiration to how a given model driven analysis could be improved.

forestFloor is machine learning to learn from the machine!

A mapping-function of a random forest model is most often high dimensional and therefore difficult to visualize and interpret. However, with a new concept, feature contributions[2-3], it is possible to split the random forest mapping-function into additive components and understand the full curvatures. Hereby the forestFloor package provides a great extended functionality, compared to the original partial dependence plot provided in the randomForest package. To explore the curvature of random forests through series of 2D/3D plots with use of color gradients is fun and quite intuitive. 
forestFloor relies amongst others on Rcpp, rgl and kknn packages to produce visualizations fast and smoothly.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("ML2"); GoBack("170");</script></p></dd>
  <dt id="138" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-138" style="cursor: pointer;">Formalising R Development - ValidR Enterprise</a> <span style="font-weight: normal; font-style: italic;">(Aimee Gott)</span></dt>
  <dd id="a-138" class="collapse"><p style="padding-top: 0.5em;">Aimee Gott, Mango Solutions:</p><blockquote>As R developers we all write code every day, but most of us are statisticians or data scientists. We haven't been trained to write code. We haven't leant about version control, unit testing or continuous integration. At Mango we have a development team who have been trained to do all of this and can teach us a lot about best practices in software development. This has allowed us to develop a rigid framework for development that satisfies regulators in a number of industries and has become the basis for our validation of R and consequently the framework of ValidR Enterprise.

In this talk we will look at some of the challenges faced when formally developing R code and how we have used ideas from computer science to build a formal development environment. We will also look at how this has been incorporated into ValidR and become the framework for ValidR Enterprise.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope1"); GoBack("138");</script></p></dd>
  <dt id="162" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-162" style="cursor: pointer;">frailtyHL: R package for variable selection in general frailty models for various survival data</a> <span style="font-weight: normal; font-style: italic;">(Il Do Ha)</span></dt>
  <dd id="a-162" class="collapse"><p style="padding-top: 0.5em;">Il Do Ha, Department of Statistics, Pukyong National University, Busan, South Korea,
Maengseok Noh,  Department of Statistics, Pukyong National University, Busan, South Korea,
Donghwan Lee, Department of Statistics, Ewha Womans University, Seoul, South Korea,
Youngjo Lee, Department of Statistics, Seoul National University, Seoul, South Korea:</p><blockquote>Variable selection methods using a penalized likelihood have been widely studied in various statistical models. However, in semi-parametric frailty models, these methods have been relatively less studied because the marginal likelihood function involves analytically intractable integrals, particularly when modeling mullti-component or correlated frailties. The frailtyHL R package (Ha, Noh and Lee, 2012) can be used for fitting semi-parametric frailty models using h-likelihood (Lee and Nelder, 1996), which does not require intensive numerical methods to find the marginal likelihood.  In this talk we introduce an updated frailtyHL package via a penalized h-likelihood for variable selection of fixed effects in a general class of semiparametric frailty models, in which random effects may be shared, nested, or correlated. Here we allow three penalty functions (least absolute shrinkage and selection operator [LASSO], smoothly clipped absolute deviation [SCAD], and HL) in our variable selection procedure. We illustrate the use of our package with the well-known practical data sets, and compare our results with alternative R-procedures.

</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Methodology2"); GoBack("162");</script></p></dd>
  <dt id="198" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-198" style="cursor: pointer;">Fun times with R and Google Sheets</a> <span style="font-weight: normal; font-style: italic;">(Jennifer Bryan)</span></dt>
  <dd id="a-198" class="collapse"><p style="padding-top: 0.5em;">Jennifer Bryan, Statistics and the Michael Smith Labs, University of British Columbia, Vancouver, Canada:</p><blockquote>Spreadsheets are something like the Ellis Island of R: lots of users and data come in through this gateway. And like Ellis Island, it is wonderful that this portal exists, but we can probably make the facilities more welcoming!

I've worked with Joanna Zhao to create the R package 'googlesheets', which allows the useR to work with public and private Google Sheets from R. 'googlesheets' wraps both the Sheets and Drive APIs, so the useR can consume data, edit data, and create, delete, rename, copy, upload, and download spreadsheets and worksheets.

Talk topics (I'll select and develop based on session context and time available):

  * The potential for Google Sheets to act as a low-barrier CMS and webscraper, making it easier for novices to marshal data they want to analyze with R.
  * The joys of test automation and continuous integration for an API wrapper package, especially with OAuth2.
  * Using Google Sheets as a data store for a Shiny app.
  * Is it lunacy to parse the formulas in spreadsheets and translate the computations into R code? Motivation: to help those trying to transition from spreadsheet users to R users.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope1"); GoBack("198");</script></p></dd>
  <dt id="124" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-124" style="cursor: pointer;">gets: General-to-Specific (GETS) Modelling</a> <span style="font-weight: normal; font-style: italic;">(Genaro Sucarrat)</span></dt>
  <dd id="a-124" class="collapse"><p style="padding-top: 0.5em;">Genaro Sucarrat, Department of Economics, BI Norwegian Business School, Norway:</p><blockquote>General-to-Specific (GETS) modelling starts with a General Unrestricted Model (GUM) that is validated against a chosen set of diagnostic tests. Next, multi-path simplification is undertaken by means of backwards elimination, where each regressor-elimination is checked against the chosen diagnostic tests, and by a BackTest (BaT) - also known as a parsimonious encompassing test - against the GUM. Simplification stops when there are no more insignificant regressors, or when the remaining possible deletions either do not pass the diagnostic tests or the BaT. Since simplification is undertaken along multiple paths, this usually results in multiple terminal models. An information criterion is then used to choose among them.

The gets package is the successor of AutoSEARCH. The successor is more user-friendly, faster and contains more features. It provides facilities for automated multi-path GETS modelling of the mean and variance of a regression, and Indicator Saturation (IS) methods for the detection and test of structural breaks in the mean. The mean can be specified as an autoregressive model with covariates (an 'AR-X' model), and the variance can be specified as a log-variance model with covariates (a 'log-ARCH-X' model). The four main functions of the package are arx, getsm, getsv and isat.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Methodology1"); GoBack("124");</script></p></dd>
  <dt id="13" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-13" style="cursor: pointer;">Getting your data into R</a> <span style="font-weight: normal; font-style: italic;">(Hadley Wickham)</span></dt>
  <dd id="a-13" class="collapse"><p style="padding-top: 0.5em;">Hadley Wickham, Chief Scientist, RStudio:</p><blockquote>You can't use R for data analysis unless you can get your data into R. Getting your data into R can be a major hassle, so in the last few  months I've been working hard to make it easier. I'll discuss the  places you most often find data (databases, excel, text files, other  statistical packages, web apis, and web pages) and the packages (DBI,  xml2, jsonlite, haven, readr, exell) that make it easy to get your data into R.  </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Datamanagement"); GoBack("13");</script></p></dd>
  <dt id="32" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-32" style="cursor: pointer;">glmmsr: fitting GLMMs with sequential reduction</a> <span style="font-weight: normal; font-style: italic;">(Helen Ogden)</span></dt>
  <dd id="a-32" class="collapse"><p style="padding-top: 0.5em;">Helen Ogden, Department of Statistics, University of Warwick, Coventry, UK:</p><blockquote>Generalized linear mixed models (GLMMs) are an important and widely used model class. In R, we can fit these models with the lme4 package, but there are some limitations. First, except in very simple cases, lme4 uses a Laplace approximation to the likelihood for inference, which may be of poor quality in some cases. Second, it is difficult to fit some GLMMs, such as pairwise comparison models, with lme4. The glmmsr package offers progress on both of these problems. It implements the sequential reduction approximation to the likelihood, controlled by a parameter which allows the user to trade-off the accuracy of the approximation against the time taken to compute it. The interface of glmmsr is an extension of that of lme4, allowing easy fitting of pairwise comparison and many other interesting models.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Regression"); GoBack("32");</script></p></dd>
  <dt id="2" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-2" style="cursor: pointer;">Graphical Modelling of Multivariate Spatial Point Patterns</a> <span style="font-weight: normal; font-style: italic;">(Matthias Eckardt)</span></dt>
  <dd id="a-2" class="collapse"><p style="padding-top: 0.5em;">Matthias Eckardt, Department of Computer Science, Humboldt-Universit&auml;t zu Berlin, Germany:</p><blockquote>Multivariate spatial point patterns are of interest in many disciplines. Possible applications of multivariate point processes are manifold including spatial dependences of randomly distributed crimes, diseases or plants. Most commonly, spatial point patterns are analyzed using distance-based approaches including nearest-neighbor estimates or correlation functions.  
Although only marginally applied to spatial point processes spectral analysis presents a complementary approach with regard to the analysis of spatial point pattern. As advantage, related to periodicities of spatial structures spectral analysis provides a nonparametric approach without any prior structural assumption. 
Both approaches inherit limitations in case of analyzing data generated by multivariate point processes such as a strong increase of complexity or visual constraints beyond three dimensions.
We address this problem of highly structured resp. highly complex multivariate point processes and propose a novel graphical model which is capturing the dependence structure of different events that occur randomly in space. We introduce a spatial structure graph which we recently implemented in R. Here, the edge set is identified by using the conditional spectral measures. Thereby, nodes are related to the components of a multivariate point process and edges express orthogonality relation in-between the single components. Examples will be taken from disease.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Spatial"); GoBack("2");</script></p></dd>
  <dt id="106" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-106" style="cursor: pointer;">h2oEnsemble for Scalable Ensemble Learning in R</a> <span style="font-weight: normal; font-style: italic;">(Erin LeDell)</span></dt>
  <dd id="a-106" class="collapse"><p style="padding-top: 0.5em;">Erin LeDell, H2O:</p><blockquote>Ensemble machine learning methods are often used when the true prediction function is not easily approximated by a single algorithm. There is an implicit computational cost to using ensemble methods, since they require the training of multiple base learning algorithms. Practitioners may prefer ensemble algorithms when model performance is valued above other factors such as model complexity and training time.  We present the `h2oEnsemble` R package, which reduces the computational burden of ensemble learning while retaining superior model performance.  This R interface provides easy access to scalable ensemble learning.

The H2O Ensemble software implements the Super Learner, or stacking, ensemble algorithm, using distributed base learning algorithms from the open source machine learning platform, H2O.  The following base learner algorithms are currently supported in `h2oEnsemble`: Generalized linear models with elastic net regularization, Gradient Boosting (GBM) with regression and classification trees, Random Forest and Deep Learning (multi-layer feed-forward neural networks).</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("ML2"); GoBack("106");</script></p></dd>
  <dt id="15" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-15" style="cursor: pointer;">Hedging and Risk Management of CDOs portfolio with R</a> <span style="font-weight: normal; font-style: italic;">(Giuseppe Bruno)</span></dt>
  <dd id="a-15" class="collapse"><p style="padding-top: 0.5em;">Giuseppe Bruno, Economics & statistics Dept, Bank of Italy:</p><blockquote>Financial Institutions’ portfolios feature a large number of credit risk instruments such as Collateralised
Debt Obligations (CDO). Quite often the books of these institutions are composed of hundreds of
CDO tranches and many more positions in credit risk flow instruments such as credit index and Credit
Defaults Swap (CDS). These instruments provide the very basic weapons for the institution’s hedging
and speculative purposes. Performance analysis of these portfolios extends the analytical tools employed
for the valuation and risk management of simple position on instruments such as CDO. The first goal of
this work is to describe a Monte Carlo technique for computing the value of multiple tranches of synthetic
CDOs built from a pool of hundreds of obligors. The Monte Carlo technique is then translated into
R functions. The second goal is to introduce some R functions addressing the task of computing markto-
market sensitivities with respect to spread, correlation etc. The final goal of the paper is to compute
the optimal composition of an hedging tranche for an already given portfolio.
For the optimization we compare the following three stochastic optimization:
1. Differential Evolution,
2. Genetic Algorithms,
3. Simulation Annealing.

</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Business"); GoBack("15");</script></p></dd>
  <dt id="113" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-113" style="cursor: pointer;">Heteroscedastic censored and truncated regression for weather forecasting</a> <span style="font-weight: normal; font-style: italic;">(Jakob W. Messner)</span></dt>
  <dd id="a-113" class="collapse"><p style="padding-top: 0.5em;">Jakob W. Messner, Department of Statistics, University of Innsbruck, Austria:</p><blockquote>This contribution presents the crch R-package that provides functions to fit censored or truncated regression models with conditional heteroscedasticity. Maximum likelihood estimation is used to fit Gaussian, logistic, or student-t distributions to left and/or right censored or truncated responses. Different regressors can be used to model the location and the log-scale of these distributions. The functions return S3-objects for which standard methods like print(), summary(), predict(), coef(), vcov(), or logLik() are available.

One application of these models is weather forecasting. Weather forecasts are usually based on numerical weather predictions. However, because of uncertain initial conditions and unresolved atmospheric processes these predictions often exhibit errors. To estimate the forecast uncertainty many weather centers provide ensemble predictions: several numerical predictions that use slightly different initial conditions and model formulations. Because these ensemble predictions can not consider all error sources they are often still uncalibrated and can considerably be improved by statistical models like those provided by the crch package. 

With data from the crch package we show that non-negative precipitation can appropriately be modeled with a censored logistic distribution and that the ensemble mean and spread serve as well suited regressors for the location and scale respectively.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Casestudy"); GoBack("113");</script></p></dd>
  <dt id="109" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-109" style="cursor: pointer;">Hierarchical Cluster Analysis of hyperspectral Raman images: a new point of view leads to 10000fold speedup</a> <span style="font-weight: normal; font-style: italic;">(Claudia Beleites)</span></dt>
  <dd id="a-109" class="collapse"><p style="padding-top: 0.5em;">Claudia Beleites, Department Spectroscopy and Imaging, Leibniz Institute of Photonic Technology, Jena, Germany:</p><blockquote>Hierarchical Cluster Analysis (HCA) is an established tool for vibrational spectroscopic data analysis.  In general, two modes of clustering are possible: Q-mode HCA clusters spectra (cases) according to their similarity, whereas R-mode analysis clusters variates (spectral bands) accoring to similarity in their distribution profile over the spectra. For hyperspectral images, this corresponds to grouping similar images.  Both modes are combined in heatmaps e.g. for microarray data.
For vibrational spectra, however, the physical processes generating spectra lead to several spectral bands originating from the same chemical species and thus give a very strong coupling between the results obtained by both modes. Typical hyperspectral imaging data sets nowadays consist of 10³-10&#8310; spectra with 10²-10³ variates (wavelength bands). Exploiting the physico-chemical relations of the data-generating spectroscopic processes, we reduce the clustering problem to R-mode HCA of a small number of relevant wavelengths, leading to a 10000fold speedup. In addition, R-mode HCA corresponds well with traditional techniques of spectra interpretation, where band assignments yield information about chemical species.

Acknowledgements: CB is funded by BMBF Project RamanCTC (13N12685).

Reference: A Bonifacio, C Beleites & V Sergo: AnalBioanalChem, 2015, 407, 1089-1095.
DOI 10.1007/s00216-014-8321-7
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Clustering"); GoBack("109");</script></p></dd>
  <dt id="46" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-46" style="cursor: pointer;">Image processing and alignment with RNiftyReg and mmand</a> <span style="font-weight: normal; font-style: italic;">(Jonathan Clayden)</span></dt>
  <dd id="a-46" class="collapse"><p style="padding-top: 0.5em;">Jonathan Clayden, Institute of Child Health, University College London, UK:</p><blockquote>Images are produced in a wide spectrum of science and engineering disciplines, and in some fields they may have three or more dimensions. A range of postprocessing techniques are commonly used to identify or emphasise features of interest. It is also often necessary to align pairs of images, a process otherwise known as registration. Here we will present two packages, written in R and C/C++, which are designed to be used in this domain. RNiftyReg performs linear and nonlinear registration between 2D or 3D images, and allows estimated transformations to be applied to other images and points. The mmand package (for "mathematical morphology in any number of dimensions") offers facilities for image erosion and dilation, smoothing and filtering. It can also be used for other, related kernel-based operations, and for array resampling or noninteger indexing.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope5"); GoBack("46");</script></p></dd>
  <dt id="137" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-137" style="cursor: pointer;">Improving computational performance with algorithm engineering</a> <span style="font-weight: normal; font-style: italic;">(Kirill Müller)</span></dt>
  <dd id="a-137" class="collapse"><p style="padding-top: 0.5em;">Kirill Müller, IVT, ETH Zurich:</p><blockquote>This talk presents three examples where algorithm engineering helps to achieve better runtime characteristics mostly with native R code. Weighted random sampling without replacement is solved in O(n log n) time by a novel reservoir sampling algorithm (instead of the straightforward O(n²) solution). Similar results are obtained for k-nearest-neighbor statistical matching, even if the Gower distance is used as a distance measure. For generalized raking---a survey calibration technique, a careful implementation of an existing algorithm is crucial to both correctness and computational performance.
-- The above examples are relevant, among others, for spatial microsimulation models and for generating synthetic populations for agent-based (e.g., transport) models. While the relatively weak performance of the standard implementations might go unnoticed for small examples, it quickly becomes an issue for larger real-world data sets. We evaluate correctness and runtime improvements for the new implementations.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Computational"); GoBack("137");</script></p></dd>
  <dt id="101" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-101" style="cursor: pointer;">Industrial Big Data Analytics for Wind Turbines</a> <span style="font-weight: normal; font-style: italic;">(Sven Jesper Knudsen)</span></dt>
  <dd id="a-101" class="collapse"><p style="padding-top: 0.5em;">Sven Jesper Knudsen, Vestas Wind Systems A/S, Vestas Performance and Diagnostics Centre:</p><blockquote>Vestas is forerunner in using industrial big data and R plays a key role. We will show how R is used as a compute engine in the scale-out processing capabilities of Hive, and share lessons
learned from a technical, a user, and a business perspective.

Vestas monitor more than 25.000 wind turbines. All of these are fitted with a multitude of sensors, and they spin off a vast amount of data. For a decade, engineers have in turn created analytics to help predict, say, when a crucial part require repair. This effort has significantly reduced unscheduled downtime and lost wind energy production.

Taking this to the current era, we have utilized Hive on Vestas' supercomputer, FireStorm. This provides a query language not unlike SQL that allows us to combine data sets that we have never been able to do before. Data scientists can infuse R mappers and/or reducers and hence combine the scale-out processing capabilities with the analytic capabilities of R. It is still a bit tech-savvy, and sometimes hard to control in lack of a query optimiser, though.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope6"); GoBack("101");</script></p></dd>
  <dt id="236" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-236" style="cursor: pointer;">Integrating R with the Go programming language using interprocess communication</a> <span style="font-weight: normal; font-style: italic;">(Christoph Best)</span></dt>
  <dd id="a-236" class="collapse"><p style="padding-top: 0.5em;">Christoph Best, Google, Hamburg, Germany:</p><blockquote>Integrating R into production environments still poses challenges. While there are a number of ways of calling R scripts and libraries from production languages such as C/C++, Java, Python, and others, these are often somewhat fragile. Newer languages like Go which have runtime structures that differ markedly from standard C often do not provide any obvious way to invoke R except by going through the shell.

We have recently explored an approach in which R code executes as an independent, but tightly integrated subprocess of a Go program and communicates over inter-process messages encoded in the protocol buffer format that is widely in use at Google. The R subprocess effectively provides an “execution service” that allows to send data from Go to R, execute R statements, and retrieve the results in a simple, robust, and straightforward way. (similar to the Rserve project, but simpler and more tightly bound to the Go process). We report on our experiences of integrating Go production code with R libraries in this way.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope1"); GoBack("236");</script></p></dd>
  <dt id="102" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-102" style="cursor: pointer;">Interactive applications written in R to accelerate statistical learning</a> <span style="font-weight: normal; font-style: italic;">(Chris Wild)</span></dt>
  <dd id="a-102" class="collapse"><p style="padding-top: 0.5em;">Chris Wild, Department of Statistics, University of Auckland, New Zealand:</p><blockquote>iNZight and VIT are interactive systems written in R aimed at accelerating statistical learning (in the educational sense). Our premise is that whereas the data world is growing explosively, the rate at which students become exposed to this expanding world is far too slow. We can greatly speed up how quickly students can experience aspects of working with data using software that finesses away choke points and time sinks. Our software caters from beginners to sophisticated multi-variable graphics and modelling (including for complex-survey data). It supports data analysis and resampling-based inference. It underpinned my FurtureLearn MOOC “Data to Insight”, gaining an extremely positive reaction from an international, largely adult, audience. It is also used by large numbers of NZ highschool and undergraduate students. 
iNZight and VIT consist of sets of R packages called by graphical interactive user interfaces provided by Gtk+ via gwidgets and RGtk2. Each major iNZight module corresponds to an R package. Its online version iNZight Lite is a server-delivered application that hooks iNZight’s R packages to a Shiny user-interface all wrapped up with R in a docker container. We will talk about acceleration goals and strategies, and challenges in building and maintaining these systems (and seek collaborators).
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Teaching1"); GoBack("102");</script></p></dd>
  <dt id="125" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-125" style="cursor: pointer;">Interactive Data Visualization using the Loon package</a> <span style="font-weight: normal; font-style: italic;">(Adrian Waddell)</span></dt>
  <dd id="a-125" class="collapse"><p style="padding-top: 0.5em;">Adrian Waddell, University of Waterloo:</p><blockquote>The loon R package provides an extendable and highly interactive data visualization toolkit for R users based on the open source Tcl/Tk package of the same name. Interactions with plots are provided with mouse and keyboard gestures as well as via command line control and with inspectors that provide graphical user interfaces (GUIs) for modifying and overseeing plots.

In this talk, we will demonstrate an exploratory visual data analysis using loon. In particular, we will analyze a dataset on the distribution of visible minority populations across Canada. Relevant features of loon used in this analysis include: zooming, panning, selection and modification of points, dynamic linking of plots, layering of visual information such as maps and regression lines, and custom point glyphs such as text or star glyphs.

We conclude this talk by giving an overview of loon's design. This will include a discussion of loon's extensive event bindings that can be used to extend and customize loon's behavior and features.

Loon's capabilities are very useful for statistical analyses such as interactive exploratory data analysis, sensitivity analysis, animation, teaching, and creating new graphical user interfaces.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Interactive"); GoBack("125");</script></p></dd>
  <dt id="221" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-221" style="cursor: pointer;">Interactive Graphics with ggplot2 and gridSVG</a> <span style="font-weight: normal; font-style: italic;">(Michael Sachs)</span></dt>
  <dd id="a-221" class="collapse"><p style="padding-top: 0.5em;">Michael Sachs, Biometric Research Branch, National Cancer Institute, Bethesda, Maryland, United States of America:</p><blockquote>Interactive statistical graphics can be useful in data analysis and reporting. They allow supplemental information to be displayed along with a standard chart, without diluting the main message. The package ggplot2 provides a powerful interface for creating high quality statistical graphics, while gridSVG converts grid graphics objects to svg objects that can be rendered in web browsers. We combine the two, along with a bit of JavaScript, to create interactive statistical graphics for use on the web. The idea is illustrated with examples for plotting receiver operating characteristic curves, and Kaplan-Meier survival curves, with interactive features bound to hover and click events. This approach differs from many others in that the figure rendering is handled by R, instead of a JavaScript library. JavaScript is used instead to bind interactive events to the svg objects. Our interface is based on the main strengths of R: the statistical computations and graphics rendering allowing for seamless transitions between static and interactive plots, retaining the R/ggplot2 style and allowing visual consistency across document types. </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Interactive"); GoBack("221");</script></p></dd>
  <dt id="243" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-243" style="cursor: pointer;">Interactive visualization using htmlwidgets and Shiny</a> <span style="font-weight: normal; font-style: italic;">(Joe Cheng)</span></dt>
  <dd id="a-243" class="collapse"><p style="padding-top: 0.5em;">Joe Cheng, RStudio, Inc.:</p><blockquote>The htmlwidgets and Shiny packages are designed to bring interactive JavaScript data visualization technology to R. Used together or separately, these packages can be used to easily create exploratory data tools, interactive HTML reports, and web applications and dashboards.

This talk will demonstrate some interesting uses of Shiny, htmlwidgets, and related packages.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Interactive"); GoBack("243");</script></p></dd>
  <dt id="167" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-167" style="cursor: pointer;">jsonlite and mongolite</a> <span style="font-weight: normal; font-style: italic;">(Jeroen Ooms)</span></dt>
  <dd id="a-167" class="collapse"><p style="padding-top: 0.5em;">Jeroen Ooms, Department of Statistics, UCLA, Los Angeles:</p><blockquote>The jsonlite package provides a powerful JSON parser and generator that has become one of standard methods for getting data in and out of R. We discuss some recent additions to the package, in particular support streaming (large) data over http(s) connections. We then introduce the new mongolite package: a high-performance MongoDB client based on jsonlite. MongoDB (from "humongous") is a popular open-source document database for storing and manipulating very big JSON structures. It includes a JSON query language and an embedded V8 engine for in-database aggregation and map-reduce. We show how mongolite makes inserting and retrieving R data to/from a database as easy as converting it to/from JSON, without the bureaucracy that comes with traditional databases. Users that are already familiar with the JSON format might find MongoDB a great companion to the R language and will enjoy the benefits of using a single format for both serialization and persistency of data.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Databases"); GoBack("167");</script></p></dd>
  <dt id="80" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-80" style="cursor: pointer;">Linking R to the Spark MLlib Machine Learning Library</a> <span style="font-weight: normal; font-style: italic;">(Dan Putler)</span></dt>
  <dd id="a-80" class="collapse"><p style="padding-top: 0.5em;">Dan Putler, Alteryx, Inc.:</p><blockquote>Apache Spark is rapidly emerging as a central technology for addressing large volumes of data. Spark provides a distributed, in-memory processing engine that can be used on top of a Hadoop HDFS data store (also Cassandra and Tachyon). Currently, Spark offers APIs for Scala, Python, and Java, but the next Spark release (1.4) will see the inclusion of an R API to Spark (SparkR). Part of that API involves the creation of a set of bindings to Spark’s MLlib library for machine learning. In this presentation, we will discuss three things related to that implantation: (1) the nature of the bindings between R and MLlib, including adapting the emerging ML Pipeline framework to R; (2) the tools and methods these bindings provide to R users; and (3) how concepts and approaches developed for R are influencing Spark in general and MLlib in particular.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Interfacing"); GoBack("80");</script></p></dd>
  <dt id="130" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-130" style="cursor: pointer;">Machine Learning for Internal Product Measurement</a> <span style="font-weight: normal; font-style: italic;">(Douglas Mason)</span></dt>
  <dd id="a-130" class="collapse"><p style="padding-top: 0.5em;">Douglas Mason, Twitter, Inc.:</p><blockquote>Most people think of machine learning applications in user-facing features such as recommendation engines. However, machine learning techniques are also tantamount for rigorous internal product measurement. In this talk we will compare different common approaches such as logistic regressions, random forests, and deep learning neural nets for product measurement, their pros and cons, and how we can use them to inform research-based product design.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("ML2"); GoBack("130");</script></p></dd>
  <dt id="165" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-165" style="cursor: pointer;">Manipulation of Discrete Random Variables in R with discreteRV</a> <span style="font-weight: normal; font-style: italic;">(Eric Hare)</span></dt>
  <dd id="a-165" class="collapse"><p style="padding-top: 0.5em;">Eric Hare, Department of Statistics, Iowa State University, USA:</p><blockquote>A prominent issue in statistics education is the sometimes large disparity between the theoretical and the computational coursework. discreteRV is an R package for manipulation of discrete random variables which uses clean and familiar syntax similar to the mathematical notation in introductory probability courses. The package offers functions that are simple enough for users with little experience with statistical programming, but has advanced features which are suitable for a large number of more complex applications. In this talk, I will introduce and motivate discreteRV, describe its functionality, and provide reproducible examples illustrating its use.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Teaching1"); GoBack("165");</script></p></dd>
  <dt id="75" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-75" style="cursor: pointer;">Massive Online Data Stream Mining using R and MOA</a> <span style="font-weight: normal; font-style: italic;">(Jan Wijffels)</span></dt>
  <dd id="a-75" class="collapse"><p style="padding-top: 0.5em;">Jan Wijffels, BNOSAC, Brussels, Belgium:</p><blockquote>MOA (http://moa.cms.waikato.ac.nz) is the most popular open source framework for data stream mining. 

With our new package RMOA (http://cran.r-project.org/web/packages/RMOA/index.html), which focusses on building streaming classification and regression machine learning models, R users can now easily interface their data to MOA in order to build, evaluate and score classification models like hoeffding trees, naive bayes rules, knn models, ensemble models like bagging, boosting, stacking on streaming data while limiting RAM usage. 
Next to streaming classifications, RMOA sets up an R friendly interface to the regression facilities of MOA such that evaluation of streaming perceptrons and the use of stochastic gradient descent iterative regression modelling on streaming data becomes a breeze.

The usage of RMOA will be showcased on a Turtlebot Robot (http://turtlebot.com) by using the rosR bridge between R and ROS (http://journal.r-project.org/archive/2013-2/dietrich-zug-kaiser.pdf).
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("ML2"); GoBack("75");</script></p></dd>
  <dt id="154" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-154" style="cursor: pointer;">medplot: A Web Application for Dynamic Summary and Analysis of Longitudinal Medical Data Based on R and shiny</a> <span style="font-weight: normal; font-style: italic;">(Lara Lusa)</span></dt>
  <dd id="a-154" class="collapse"><p style="padding-top: 0.5em;">Lara Lusa, Institute for Biostatistics and Medical Informatics, University of Ljubljana, Ljubljana, Slovenia:</p><blockquote>We present medplot, an interactive web application that simplifies the exploration and analysis of longitudinal data.  The web application was developed using the framework offered by the shiny R package, which considerably simplifies the creation of web applications based on code written in R. 
Longitudinal data arise often in biomedical studies, where patients are often evaluated numerous times and a large number of variables are recorded at each time-point. Researcher with biomedical background often find difficulties in the use of specialized statistical software, which offers the capability of correctly and flexibly analyze this type of data. 
medplot can be used to summarize, visualize and analyze data by researchers that are not familiar with statistical programs. The summary tools produce publication-ready tables and graphs. The analysis tools include features that are seldom available in spreadsheet software, such as correction for multiple testing, repeated measurement analyses and flexible non-linear modeling of the association of the numerical variables with the outcome. medplot is freely available and open source, it has an intuitive graphical user interface (GUI), it is accessible via the Internet and can be used within a web browser, without the need for installing and maintaining programs locally on the user's computer. </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Medicine"); GoBack("154");</script></p></dd>

<dt id="300" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-300" style="cursor: pointer;">
Microsoft Azure Machine Learning with R</a> <span style="font-weight: normal; font-style: italic;">(Stephen Elston)</span></dt>
 <dd id="a-300" class="collapse"><p style="padding-top: 0.5em;">Stephen Elston, Quantia Anatylics, USA:</p>
<blockquote>
The Microsoft Azure Machine Learning (MAML) cloud platform is an easy to use scalable and secure environment for data transformation and machine learning.  R code integrates with and extends MAML modules and services. Data munging, visualization and creation and evaluation machine learning models can be done with R in MAML. In addition, MAML models and R code running in Azure ML are published as a web services, making them accessible to a wide range of users. Users access these web services from on multiple platforms, including Excel. 
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("ML2"); GoBack("300");</script></p></dd>

  <dt id="193" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-193" style="cursor: pointer;">Multinomial functional regression with application to lameness detection for horses</a> <span style="font-weight: normal; font-style: italic;">(Helle Sørensen)</span></dt>
  <dd id="a-193" class="collapse"><p style="padding-top: 0.5em;">Helle Sørensen, Department of Mathematical Sciences, University of Copenhagen, Denmark:</p><blockquote>Our data consists of 85 acceleration signals collected from trotting horses that are either healthy or have an induced lameness on one of the four limbs. Our aim is to develop a method that uses such a signal for detection of lameness and identification of the lame limb.  This is a supervised classification problem with five groups and functions (curves) as predictors. We propose to use a multinomial functional regression model. We combine the discrete wavelet transform and LASSO penalization for estimation of the model and use the fitted model to predict the class membership for new curves.  We mainly rely on existing R packages for computations (fda for preprocessing of the data signals, wavethresh for wavelet computations, and glmnet for penalized multinomial regression). Joint work with Seyed Nourollah Mousavi.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Casestudy"); GoBack("193");</script></p></dd>
  <dt id="24" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-24" style="cursor: pointer;">multiplex: Analysis of Multiple Social Networks with Algebra</a> <span style="font-weight: normal; font-style: italic;">(Antonio Rivero Ostoic)</span></dt>
  <dd id="a-24" class="collapse"><p style="padding-top: 0.5em;">Antonio Rivero Ostoic, School of Business and Social Sciences, Aarhus University, Denmark:</p><blockquote>multiplex - Analysis of Multiple Social Networks with Algebra is a package for the study of social systems made of different types of relationships and actors having multiple affiliations. With multiplex is possible to create and manipulate multivariate network data with different formats, and there are effective ways available to treat multiple networks with routines that combine algebraic systems like the partially ordered semigroup and semiring structures for signed graphs together with the relational bundles occurring in different types of multivariate network data sets. The newest version of the package supports Galois connections between families of subsets such as the actors in a social network and their corresponding events. In conjunction with Rgraphviz, there is a routine to visualize bipartite graphs and lattice diagrams of partially ordered sets.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Networks"); GoBack("24");</script></p></dd>
  <dt id="105" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-105" style="cursor: pointer;">Multivariate analysis of mixed data: The PCAmixdata R package</a> <span style="font-weight: normal; font-style: italic;">(Marie Chavent)</span></dt>
  <dd id="a-105" class="collapse"><p style="padding-top: 0.5em;">Marie Chavent, Inria Bordeaux Sud-Ouest and University of Bordeaux, France:</p><blockquote>Mixed data type arise when observations are described by a mixture of numerical and categorical variables. The R package PCAmixdata extends standard multivariate analysis methods to incorporate this type of data. The key techniques included in the package are PCAmix (PCA of a mixture of numerical and categorical variables), PCArot (rotation in PCAmix) and MFAmix (multiple factor analysis with mixed data within a dataset). A synthetic presentation of the three algorithms will be provided and the three main procedures will be illustrated on real data composed of four datasets caracterizing conditions of life of cities of Gironde, a south-west region of France.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("ML1"); GoBack("105");</script></p></dd>
  <dt id="223" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-223" style="cursor: pointer;">Naturally Sweet Rcpp with Modern C++ and Boost</a> <span style="font-weight: normal; font-style: italic;">(Matt P. Dziubinski)</span></dt>
  <dd id="a-223" class="collapse"><p style="padding-top: 0.5em;">Matt P. Dziubinski, Department of Mathematical Sciences, Aalborg University, Denmark:</p><blockquote>"C++11 feels like a new language: The pieces just fit together better than they used to and I find a higher-level style of programming more natural than before and as efficient as ever." -- Bjarne Stroustrup.

Since 2011, Standard C++ has become a simpler, more productive language -- it has also expanded its support for numerics and parallelism. This allows us to stay within a portable C++ code while achieving the goals of Rcpp sugar.

This example-driven session will provide a walkthrough showing how modern C++ can be used for a variety of statistical computing applications. We will see how the advances in the core language, the standard library, and the wider libraries ecosystem (particularly Boost) enable simple and efficient code.

Topics include: Data wrangling with C++11 algorithms, lambdas, and Boost (Phoenix, Range, StringAlgorithms, Tokenizer); random number generation with C++11; numerics & statistical analysis with Boost.Accumulators & Boost.Math; easy parallelism with C++11 (async) and OpenMP; timing code with the chrono library; shorter code with auto, decltype & range-based for loop; the most useful algorithms & containers in C++11 and Boost.

We will end with a preview of the upcoming C++14 features which further contribute to a simpler, more readable code.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Interfacing"); GoBack("223");</script></p></dd>
  <dt id="116" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-116" style="cursor: pointer;">NaviCell Web Service for Network-based Data Visualization</a> <span style="font-weight: normal; font-style: italic;">(Eric Bonnet)</span></dt>
  <dd id="a-116" class="collapse"><p style="padding-top: 0.5em;">Eric Bonnet, Institut Curie, Paris, France:</p><blockquote>NaviCell Web Service (https://navicell.curie.fr/pages/nav_web_service.html) is a tool for biological networks-based visualization of “omics” data. It implements several data visual representation methods, including the novel map staining technique for grasping large-scale trends in numerical values (such as whole transcriptome) projected on top of a pathway map. NaviCell Web Service allows combining visualization of different data types. It is scalable, based on Google Maps technology allowing working with large pathway maps, containing thousands of nodes and using semantic zooming principles. NaviCell Web Service can be applied to pathway maps of different types represented in various formats in different application fields. The web service provides a server mode, which allows automating visualization tasks and retrieve data from maps via RESTfull (standard HTTP) calls. Bindings to different programming languages are provided (Python, R, Java). We illustrate the purpose of the tool with several case studies using different pathway maps, with an emphasis on the R package R-NaviCell (https://github.com/eb00/R-NaviCell).</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Visualisation2"); GoBack("116");</script></p></dd>
  <dt id="117" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-117" style="cursor: pointer;">New interactive visualization tools for exploring high dimensional data in R</a> <span style="font-weight: normal; font-style: italic;">(Wayne Oldford)</span></dt>
  <dd id="a-117" class="collapse"><p style="padding-top: 0.5em;">Wayne Oldford, Department of Stats & Act. Sci., University of Waterloo, Canada:</p><blockquote>Graphs whose nodes represent low dimensional data spaces and whose edges are transitions between them provide a relatively simple visual aid for navigating high dimensional data spaces via low dimensional trajectories (see Hurley and Oldford, Comput Stat 2011).  The R package RnavGraph (Waddell and Oldford, useR! 2011) provided a proof of concept for this new type of interactive data visualization method in R. 

In this presentation, we take advantage of the extendable and highly interactive R package loon to present new and integrated tools for exploring high dimensional data in R.  Novel tools include, for example, various navigational graphs, interactive scagnostic scatterplot matrices, interactive serial axes displays (parallel and radial coordinates), and novel event bindings. Because loon’s event bindings can evaluate callbacks to any R function, the navigation graphs can drive any display (or analysis) in R, including loon's own interactive plots. 
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Interactive"); GoBack("117");</script></p></dd>
  <dt id="37" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-37" style="cursor: pointer;">Novel hybrid spatial predictive methods of machine learning and geostatistics with applications to terrestrial and marine environments in Australia</a> <span style="font-weight: normal; font-style: italic;">(Jin Li)</span></dt>
  <dd id="a-37" class="collapse"><p style="padding-top: 0.5em;">Jin Li, Environmental Geoscience Division, Geoscience Australia, Canberra,  Australia:</p><blockquote>The accuracy of spatially continuous environmental data, usually generated from point samples using spatial prediction methods (SPMs), is crucial for evidence-informed environmental management and conservation. Improving the accuracy by identifying the most accurate methods is essential, but also challenging since the accuracy is often data specific and affected by multiple factors. Because of the high predictive accuracy of machine learning methods, especially random forest, they were introduced into spatial statistics by combining them with existing SPMs, which resulted in new hybrid methods with improved accuracy. This development opened an alternative source of methods for spatial prediction. In this study, we introduced these hybrid methods, along with the modelling procedure adopted to develop the final optimal predictive models. These methods were compared with the commonly used SPMs in R using cross-validation techniques based on both marine and terrestrial environmental data. We also addressed the following questions: 1) whether they are data-specific for marine environmental data, 2) whether input predictors affect their performance, and 3) whether they are equally applicable to terrestrial environmental data? This study provides suggestions and guidelines for the application of these hybrid methods to spatial predictive modelling not only in environmental sciences, but also in other relevant disciplines. </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Spatial"); GoBack("37");</script></p></dd>
  <dt id="56" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-56" style="cursor: pointer;">Optimized R functions for analysis of ecological community data using the R virtual laboratory (Rvlab)</a> <span style="font-weight: normal; font-style: italic;">(Costas Varsos and Theodore Patkos)</span></dt>
  <dd id="a-56" class="collapse"><p style="padding-top: 0.5em;">Costas Varsos and Theodore Patkos, Institute of Computer Science, Foundation of Research and Technology Hellas, Heraklion, Crete, Greece:</p><blockquote>Parallel data manipulation is no news to the R community; yet, it is not uncommon even for experienced developers not to have a clear recipe as to which package to select among the repertoire of choices for handling Big Data in R. Our targeted users, the ecologists/microbiologists/average R users, often face difficulties in exploiting the full capacity of their computational resources to execute their R scripts. This report has a twofold goal: (i) describe a complete methodology for the analysis of large datasets, combining diverse R packages, (ii) present its application on a virtual R laboratory (RvLab) that makes execution of complex functions and visualization of results, easy and readily available to the end-user.

Our methodology processes data at different levels of abstraction. The pbdMPI package is used to implement Single Program Multiple Data (SPMD) parallelization on primitive mathematical operations (e.g., outer product), as well as on their interplay within popular high-level functions of the Vegan package. The dplyr and RPostgreSQL packages are further integrated, offering secondary storage solutions whenever memory demands exceed RAM resources.

RvLab is running on a PC cluster and offers an intuitive UI enabling the analysis of ecological and microbial communities based on optimized Vegan functions.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Ecology"); GoBack("56");</script></p></dd>
  <dt id="90" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-90" style="cursor: pointer;">Performance Analysis for Parallel R Programs: Towards Efficient Resource Utilization</a> <span style="font-weight: normal; font-style: italic;">(Helena Kotthaus)</span></dt>
  <dd id="a-90" class="collapse"><p style="padding-top: 0.5em;">Helena Kotthaus, Department of Computer Science 12, TU Dortmund University, Germany:</p><blockquote>The R programming language is widely used in biostatistics with
high-dimensional data sets. Here, a vast amount of resources
is needed. Our tool traceR allows the user to profile the resource usage of an R application to locate bottlenecks and develop new optimizations.

Parallel computing is becoming a more and more popular option to
reduce the effective runtime of compute-bound R applications. We therefore have improved traceR to allow for profiling parallel applications also. In contrast to existing profiling tools such as Rprof, traceR is directly integrated with the R interpreter. This enables the generation of more detailed and accurate data about memory and runtime behavior of an R application. Since the gain from parallel execution can be negated if the memory requirements of all parallel processes exceed the capacity of the system, this data can serve as a constraint to determine the maximum amount of parallelization.

For future work we want to use the profiling data produced by traceR to develop an optimized scheduling strategy for efficient resource utilization for parallel R programs. In this talk we will present our profiling tool traceR and how to apply it to analyze parallel R programs.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Computational"); GoBack("90");</script></p></dd>
  <dt id="92" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-92" style="cursor: pointer;">Phenotypic deconvolution: the next frontier in pharma</a> <span style="font-weight: normal; font-style: italic;">(Marvin Steijaert)</span></dt>
  <dd id="a-92" class="collapse"><p style="padding-top: 0.5em;">Marvin Steijaert, Open Analytics NV:</p><blockquote>Pharmaceutical drug design faces high failure rates in clinical trials. One strategy to reduced this failure rate is the use of disease-relevant phenotypic assays. These assays measure compound activity in a multi-target cellular context, while classic assays aim at isolated targets. Drawback of phenotypic assays is the lack of knowledge about modes of action of active compounds (i.e., involved proteins and potential drug targets). This knowledge is crucial for further development towards a potent drug with little side effects. We use machine learning methods to predict the most likely modes of action.

Our (R and C++) modeling pipeline uses a two-layer approach. The first layer predicts compound activity on single protein targets at five different concentrations. As input we use the measured activity of 1.5M compounds on 1.5k targets. Due to the high costs of generating such amounts of data, only 2% of the compound-target combinations have been measured. Hence the need for predictive modeling. The second layer combines these predictions and selects the features (targets) that can best explain the phenotypic assay data.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Medicine"); GoBack("92");</script></p></dd>
  <dt id="61" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-61" style="cursor: pointer;">Plotting data as music videos in R</a> <span style="font-weight: normal; font-style: italic;">(Thomas Levine)</span></dt>
  <dd id="a-61" class="collapse"><p style="padding-top: 0.5em;">Thomas Levine, csv soundsystem:</p><blockquote>I have been experimenting with plotting data in the form of music
videos with the goal of plotting complex, multidimensional data in
intuitive ways. I will conceptually discuss how I map data to video
elements and musical elements, and I will give practical demonstrations
of synthesizing music and video in R. Aside from learning how to make
music videos in R, attendees can expect to learn about some of the
more esoteric aspects of base R plots.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Visualisation2"); GoBack("61");</script></p></dd>
  <dt id="62" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-62" style="cursor: pointer;">PPforest</a> <span style="font-weight: normal; font-style: italic;">(Natalia da Silva)</span></dt>
  <dd id="a-62" class="collapse"><p style="padding-top: 0.5em;">Natalia da Silva, Department of Statistics, Iowa State University, Iowa, United States of America:</p><blockquote>We present an R package called PPforest available on CRAN.  This package implements a projection pursuit classification random forest.
A random forest is an ensemble learning method, built on bagged trees. The bagging provides power for classification because it yields information about variable importance, predictive error and proximity of observations. This research adapts the random forest to utilize combinations of variables in the tree construction, which we call the projection pursuit classification random forest (PPforest). In a random forest each split is based on a single variable, chosen from a subset of predictors. In the PPforest, each split is based on a linear combination of randomly chosen variables. The linear combination is computed by optimizing a projection pursuit index, to get a projection of the variables that best separates the classes. The PPforest uses the PPtree algorithm, which fits a single tree to the data. Utilizing linear combinations of variables to separate classes takes the correlation between variables into account, and can outperform the basic forest when separations between groups occur on combinations of variables. Two projection pursuit indexes, LDA and PDA, are used for PPforest.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("ML1"); GoBack("62");</script></p></dd>
  <dt id="112" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-112" style="cursor: pointer;">R as a citizen in a polyglot world - the promise of the Truffle framework</a> <span style="font-weight: normal; font-style: italic;">(Lukas Stadler)</span></dt>
  <dd id="a-112" class="collapse"><p style="padding-top: 0.5em;">Lukas Stadler, Oracle Labs:</p><blockquote>The days in which a problem could be solved within the confines of only one language are long gone - today’s applications, including those written within the R language ecosystem, are multilingual, and today’s programmers are polyglot.

This talk presents our vision of a multilingual environment centered around the R programming language. This environment uses the Truffle framework, backed by the Graal optimizing compiler, to provide an architecture that realizes all the advantages of polyglot programming, while at the same time offering solutions to hard questions like security, performance and debugging.

In the talk, we will introduce the architecture of our system, which is the foundation for a growing list of high-performance language implementations. We will also describe our progress towards utilizing this architecture to build a new high-performance compliant and just-in-time compiled R implementation and discuss how users can take advantage of interoperability with other languages supported by our system (e.g. JavaScript or Ruby).</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope3"); GoBack("112");</script></p></dd>
  <dt id="54" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-54" style="cursor: pointer;">R database connectivity: what did we leave behind?</a> <span style="font-weight: normal; font-style: italic;">(Mateusz &#379;ó&#322;tak)</span></dt>
  <dd id="a-54" class="collapse"><p style="padding-top: 0.5em;">Mateusz &#379;ó&#322;tak, Educational Research Institute, Warsaw, Poland:</p><blockquote>The idea of having one common set of functions (API) to connect to any relational database system arose very early in the R community. The idea was implemented as the DBI package, released in December 2001. Unfortunately, since the beginning the DBI package has focused on translating R's world into relational databases' world rather than the opposite. This approach has resulted in lacking guidelines on implementing various common and important features of relational databases, e. g. schemes, views, parameterized statements, etc. which do not have any equivalents in R's world.  Consequently, R users have inconsistently implemented such features in various relational database connectivity packages, stifling the initial idea of one common API.
Nowadays, developing a common API is more important than ever for at least two reasons. First, R is more and more frequently used in business solutions where the most common way of storing data are big and complicated relational databases. Second, following the big data revolution, relational database systems are becoming more and more popular with researchers using R.
In my talk, I would like to analyse the problem and its consequences in more detail, and discuss possible solutions.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Databases"); GoBack("54");</script></p></dd>
  <dt id="50" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-50" style="cursor: pointer;">R Package CASA: Component Automatic Selection in Additive models</a> <span style="font-weight: normal; font-style: italic;">(Thouvenot Vincent)</span></dt>
  <dd id="a-50" class="collapse"><p style="padding-top: 0.5em;">Thouvenot Vincent, EDF R&D, Clamart, France/ Univ. Orsay, Orsay, France:</p><blockquote>For electricity providers, forecasting electricity demand is a key activity as it is one of the most important entries for production planning and trading on the electricity demand. The development of smart grids and more generally the new data sources coming from new metering infrastructures for energy management, as well as the consumption habits changes, induce a need for new analytics. New statistical methods allowing automatic feature selection and model calibration are thus a necessary tool for many actors of energy markets. We propose here a new automatic methodology based on grouped lasso variable selection.

The R package CASA provides an algorithm which allows efficient selection and estimation of additive model, which achieve a tradeoff between good forecasting performances and low human intervention, by combining Group LASSO and P-Splines estimator, which are efficient in selection and in estimation respectively. Our procedure does not suffer from the traditional bias of a Lasso (and thus grouped Lasso) selector. We develop the main possibilities offer by CASA on the nice case study GEFCom12 public dataset which deals with meteorological covariate selection for local electricity forecasting in US.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Methodology1"); GoBack("50");</script></p></dd>
  <dt id="121" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-121" style="cursor: pointer;">R User Groups</a> <span style="font-weight: normal; font-style: italic;">(Joseph B. Rickert)</span></dt>
  <dd id="a-121" class="collapse"><p style="padding-top: 0.5em;">Joseph B. Rickert, Revolution Analytics / Microsoft:</p><blockquote>R User Groups continue to thrive around the world. Several new groups were established during the past year and membership in existing groups is growing. In this talk I will examine the dynamics of R user group activity, highlight apparent trends and make some conjectures about the needs that R user groups appear to satisfy and present some ideas about best practices. I will conclude by offering  some thoughts on how to start a new user group and describe my experiences helping to grow the Bay Area useR Group. 
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope2"); GoBack("121");</script></p></dd>
  <dt id="53" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-53" style="cursor: pointer;">R-package to assess and visualize the calibration of multiclass risk predictions</a> <span style="font-weight: normal; font-style: italic;">(Kirsten Van Hoorde)</span></dt>
  <dd id="a-53" class="collapse"><p style="padding-top: 0.5em;">Kirsten Van Hoorde, Open Analytics NV:</p><blockquote>Risk prediction models for diagnostic or prognostic outcomes are useful tools for clinical decision support, personalized healthcare and shared decision making. Clinical problems are often dichotomized for analysis - e.g. a benign or malignant ovarian tumor – although the underlying problem is multiclass or multinomial – e.g. a benign, borderline or invasive ovarian tumor. A more detailed differentiation can help to optimize (patient) management as well as patient survival.

Calibration is an important aspect when evaluating risk prediction models, i.e. whether the predicted risks correspond to the observed probabilities. The optimal use of risk prediction models relies on reliable risk estimation.

For binary outcomes, several tools exist to assess different aspects of model calibration (e.g. calibration-in-the-large and calibration plots). We extended these tools towards multinomial risk prediction models [1]. We proposed multinomial calibration plots which give a visual summary of the calibration performance [1].  Furthermore, we presented generic tools to assess the calibration of multiclass risk models [2]. 

The integration of these different multiclass calibration tools into a new R package multiCalibration (multinomial/multiclass calibration) fills the gap of multinomial calibration tools and allows the user to assess and visualize calibration of multiclass risk predictions irrespective of the used modeling technique. 
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Visualisation1"); GoBack("53");</script></p></dd>
  <dt id="181" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-181" style="cursor: pointer;">rags2ridges: Ridge estimation and graphical modeling for high-dimensional precision matrices</a> <span style="font-weight: normal; font-style: italic;">(Carel F.W. Peeters)</span></dt>
  <dd id="a-181" class="collapse"><p style="padding-top: 0.5em;">Carel F.W. Peeters, Dept. of Epidemiology & Biostatistics, VU University medical center Amsterdam, the Netherlands:</p><blockquote>Estimation of the multivariate normal precision matrix is central to many statistical procedures. We study ridge estimation of the precision matrix in the high-dimensional setting where the number of variables is large relative to the sample size. We note that several classes of estimator that are caught under the umbrella term `ridge-type precision estimation' cannot be explained as resulting from penalization with a common L2-penalty. Subsequently, starting from a proper L2-penalty, analytic expressions are derived for two alternative ridge estimators (encapsulating target and non-target shrinkage) of the precision matrix. 

The rags2ridges package implements the alternative ridge estimators along with supporting functions to employ these estimators in a graphical modeling setting. These supporting functions enable, a.o., the determination of the optimal value of the penalty parameter, the determination of the support of a shrunken precision estimate, as well as various visualization options.

We will demonstrate some of the properties of the alternative precision estimators and show how the R implementation can be used in the graphical modeling of oncogenomics data. In addition, we will present some of the modules in rags2ridges that are currently under development. These modules extend the basic module to deal with meta-analytic graphical modeling and directed networks.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope5"); GoBack("181");</script></p></dd>
  <dt id="76" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-76" style="cursor: pointer;">Rango - Databases made easy</a> <span style="font-weight: normal; font-style: italic;">(Willem Ligtenberg)</span></dt>
  <dd id="a-76" class="collapse"><p style="padding-top: 0.5em;">Willem Ligtenberg, Open Analytics N.V., Antwerpen, Belgium:</p><blockquote>Rango is a package that makes it easy to use relational databases 
directly from R and without a line of SQL (an Object Relational Mapper in tech-speak).

Let's consider an example. Assume we have a database of music tracks. 
This simple version consists of two tables, one containing information 
about the artists (artist) and one containing information about the 
tracks (track).

Rango allows you to create new artist or track objects in R and then 
either store or retrieve them from the database. The relationship between
a track and an artist is stored as an attribute in the track object. 
This allows Rango to automatically create joins when you want to make 
a selection in one table based upon another table. In our example, 
we could ask for all tracks by a given artist.

Rango optimizes where possible. For example, we use lazy 
loading to only retrieve information from associated tables upon 
access. Rango can cache results of queries making subsequent retrievals faster.
Comparison operators have also been implemented to easily retrieve lists 
of objects.

Lastly, all functions can be used with the same syntax regardless of the 
database backend. Currently supported database backends are SQLite and PostgreSQL.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Databases"); GoBack("76");</script></p></dd>
  <dt id="67" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-67" style="cursor: pointer;">Rapid Deployment of Automatic Scoring Models to Hadoop Production Systems</a> <span style="font-weight: normal; font-style: italic;">(Amitai Golub)</span></dt>
  <dd id="a-67" class="collapse"><p style="padding-top: 0.5em;">Amitai Golub, Innogames GmbH, Hamburg, Germany:</p><blockquote>Predictive modelling in R is the bread and butter of the data scientist, but deploying these analyses into production systems often runs into many barriers. These difficulties stem mostly from issues pertaining to scalability and communication between different systems, very commonly R & Hadoop. 


A classic example in the gaming industry is player retention, often critical for the success of a company, but notoriously hard to predict. Once a method has been found to work, we would like to deploy quickly in order to scale to as many players as possible. 


We show a three step process allowing data scientists to quickly develop models and deploy them to Hadoop systems, using the RHive, rmr2, and plyrmr packages. This process yields a fully automatic churn prediction model run automatically by a cron job. Furthermore, once initial deployment is done, further user scoring models can be easily added to the system. 
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope4"); GoBack("67");</script></p></dd>
  <dt id="70" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-70" style="cursor: pointer;">Rapid detection of spatiotemporal clusters</a> <span style="font-weight: normal; font-style: italic;">(Markus Loecher)</span></dt>
  <dd id="a-70" class="collapse"><p style="padding-top: 0.5em;">Markus Loecher, Dept. of Economics, Berlin School of Economics and Law, Germany:</p><blockquote>Identifying spatially and temporally defined hotspots of activity is an important tool for many technologies and scientific disciplines. This task can often be reduced to detecting over-densities in space relative to a background density. This relative density estimation is framed as a binary classification problem. An integrated hotspot visualizer is presented which allows the efficient identification and visualization of clusters in one environment. Many real data exhibit multiple clusters at many different scales at various angles. Rather than aggregating to a given spatial partition, algorithms such as classification trees can find regions with high and low densities or rates w.r.t. some baseline. We succeed in identifying rectangular “leafs” of high or low incidence of one of the two classes by growing trees on various rotations of the data. While a binary recursive tree partitions space exhaustively and in that sense is not naturally suited as a hotspot detector, we depart from this traditional view and simply retain the most “interesting boxes”, typically those with an average rate above a chosen threshold. </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("ML1"); GoBack("70");</script></p></dd>
  <dt id="131" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-131" style="cursor: pointer;">Refactoring the xtable Package</a> <span style="font-weight: normal; font-style: italic;">(David Scott)</span></dt>
  <dd id="a-131" class="collapse"><p style="padding-top: 0.5em;">David Scott, Department of Statistics, University of Auckland, Auckland, New Zealand:</p><blockquote>The xtable package is a widely used package for including tables produced from R output in LaTeX and HTML documents.  Unfortunately, a major function  in the package, print.xtable has become unmanageably large over time. It now has 32 arguments and runs to 672 lines of R code. This project involved analysis of the code in print.xtable and refactoring using functions of much more moderate length. Test code was used to ensure that the refactored code produced the same results as the original code.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Computational"); GoBack("131");</script></p></dd>
  <dt id="150" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-150" style="cursor: pointer;">Reordering and selecting continuous variables for scatterplot matrices</a> <span style="font-weight: normal; font-style: italic;">(Katrin Grimm)</span></dt>
  <dd id="a-150" class="collapse"><p style="padding-top: 0.5em;">Katrin Grimm, Department of Computeroriented Statistics and Data Analysis, University of Augsburg, Germany:</p><blockquote>The identification and visualisation of correlation patterns can be challenging for large, new datasets. Standard visualisation techniques like scatterplot matrices become less informative as the number of variables increases. To get an initial overview two questions can be considered:

1. What is the general correlation structure?
2. Which q of all p continuous variables are especially highly correlated and how do the bivariate dependencies look?

The first question can be answered visually by corrgrams. By using a new ordering of the variables, based on the angles of the first two eigenvectors of the correlation matrix, correlation patterns amongst the variables can be emphasised. Reordering can also be helpful for answering the second question.

The talk presents a further approach, selecting groups of variables which are all highly correlated with one another. Only variable combinations are considered, which are adjacent in the reordered list of variables. This avoids having to check all possible combinations to reduce the complexity of the calculation. The talk includes a formal description of the approach and a practical example to show what results are obtained in practice.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Visualisation1"); GoBack("150");</script></p></dd>
  <dt id="43" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-43" style="cursor: pointer;">rOpenSci: A suite of reproducible research tools in R</a> <span style="font-weight: normal; font-style: italic;">(Karthik Ram)</span></dt>
  <dd id="a-43" class="collapse"><p style="padding-top: 0.5em;">Karthik Ram, University of California, Berkeley & The rOpenSci project:</p><blockquote>The rOpenSci project (http:/ropensci.org) began as a grassroots effort in 2011, and has been operating as a fully funded research project since 2013. This community driven project builds upon R's popularity as a scientific research tool and fills in additional gaps in the computational pipeline by providing tools for data acquisition (from APIs and other source), data manipulation  (including an emerging suite for spatial data analysis and mapping), data visualization tools, and data publication tools. 

In this talk I'll highlight a subset of these tools and how they can facilitate transparent, reproducible and efficient data analysis pipelines.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Reproducibility"); GoBack("43");</script></p></dd>
  <dt id="158" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-158" style="cursor: pointer;">Running R+Hadoop using Docker Containers</a> <span style="font-weight: normal; font-style: italic;">(E. James Harner)</span></dt>
  <dd id="a-158" class="collapse"><p style="padding-top: 0.5em;">E. James Harner, West Virginia University:</p><blockquote>There are numerous obstacles in implementing HDFS/Hadoop enabled to run R code. Scripts and packages must be distributed and possibly compiled. Just configuring Hadoop and  R can be difficult for those not intimately familiar with the command line. This presentation will show how to easily start a multi-node Hadoop cluster using Docker and execute map-reduce jobs using  R scripts. The cluster can be run both in a single VM on a laptop or on a cloud provider such as AWS or Azure. The implementation provides access to the Hadoop ecosystem built on HDFS/YARN, including the Spark, Storm, HBase, and Hive components. Multiple alternatives for writing R scripts and different deployment options are available. An experimental client front-end, which greatly simplifies interaction with HDFS/Hadoop, will be previewed.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Computational"); GoBack("158");</script></p></dd>
  <dt id="79" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-79" style="cursor: pointer;">Scalable distributed random-forest in R</a> <span style="font-weight: normal; font-style: italic;">(Arash Fard, Vishrut Gupta)</span></dt>
  <dd id="a-79" class="collapse"><p style="padding-top: 0.5em;">Arash Fard, Vishrut Gupta, HP DistributedR:</p><blockquote>Random Forest and Gradient Boosting Machine are widely used methods for building ensembles of decision trees for classification and regression.
However, the training phase of these algorithms can easily take from hours to days to complete on even small datasets. 
Due to their complex nature, few, if any, distributed implementations of decision tree construction algorithms are available in open source.
 
In this talk, we will explain two different versions of distributed Random Forest that we have implemented using the open source “distributedR” package. 
In the first implementation, each server builds independent trees and then aggregates them in a final model.
While this approach shows good performance, it is limited by the fact that the full data has to be replicated on each machine.
We will present a second implementation, where each individual tree is created in parallel across all machines. 
Our experience shows that this new distributed Random Forest package scales linearly and can easily process multi-gigabyte data-sets in R.
More importantly, the same technique can be used to implement distributed version of other tree ensemble methods such as Gradient Boosting Machine.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("ML1"); GoBack("79");</script></p></dd>
  <dt id="135" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-135" style="cursor: pointer;">Seasonal Adjustment with the R packages x12 and x12GUI</a> <span style="font-weight: normal; font-style: italic;">(Alexander Kowarik)</span></dt>
  <dd id="a-135" class="collapse"><p style="padding-top: 0.5em;">Alexander Kowarik, Methods, Statistics Austria, Vienna, Austria:</p><blockquote>The X-12-ARIMA Seasonal Adjustment program of the U.S. Census Bureau extracts the different components of a monthly or quarterly time series. It is the state-of-the-art technology for seasonal adjustment used in many statistical offices. The procedure makes additive or multiplicative adjustments and creates an output data set containing the adjusted time series and intermediate calculations. 
The original output from X-12-ARIMA is somehow static and it is not always an easy task for users to extract the required information for further processing. The R package x12 provides wrapper functions and an abstraction layer for batch processing X-12-ARIMA. It allows summarizing, modifying and storing the output from X-12-ARIMA within a well-defined class-oriented implementation.
On top of the class-oriented implementation the graphical user interface allows access to the R package x12 without demanding too much R knowledge. Users can interactively select additive outliers, level shifts and temporary changes and see the impact immediately.
Having the powerful X-12-ARIMA Seasonal Adjustment program available directly from within R, as well as containing the new facilities for marking outliers, batch processing and change tracking, makes the package a potent and functional tool.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Methodology2"); GoBack("135");</script></p></dd>
  <dt id="120" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-120" style="cursor: pointer;">seasonal: An X-13 interface for seasonal adjustment</a> <span style="font-weight: normal; font-style: italic;">(Christoph Sax)</span></dt>
  <dd id="a-120" class="collapse"><p style="padding-top: 0.5em;">Christoph Sax, University of Basel:</p><blockquote>'seasonal' is an easy-to-use and full-featured R-interface to X-13, the newest seasonal adjustment software developed by the United States Census Bureau. X-13 is a free command line software, written in Fortran, which is used by many statistical agencies. It offers a large toolkit to seasonally adjust time series, including fully automated methods.

With 'seasonal', it is possible to access the almost complete syntax of X-13, using a simple R command. It also offers a simple and flexible mechanism to read almost all output from X-13. Beside interfacing to X-13, 'seasonal' includes the capability to adjust for user defined holidays, such as Chinese New Year or Indian Diwali. 'seasonal' also includes a 'shiny'-based graphical user interface, which can also be explored online: www.seasonal.website.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Methodology2"); GoBack("120");</script></p></dd>
  <dt id="188" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-188" style="cursor: pointer;">Shiny application for analyzing consumer preference and sensory data in a mixed effects model framework: introducing SensMixed  package</a> <span style="font-weight: normal; font-style: italic;">(Alexandra Kuznetsova)</span></dt>
  <dd id="a-188" class="collapse"><p style="padding-top: 0.5em;">Alexandra Kuznetsova, DTU Compute:</p><blockquote>Often too simplistic mixed effects models are used in analysis of sensory studies. One of the reasons to that is connected with the fact that no open-source software or application is available that is specifically dedicated to analyze these types of studies and can handle complex mixed effects models.

We present the SensMixed package, that offers analysis of sensory and consumer data within a mixed effects model framework (A. Kuznetsova et al. 2015). The package provides a number of options for the model building of the mixed effects models, which are constructed with the lmer function of  the lme4 package (Bates et al., 2014)   and are tested with the lmerTest  (A. Kuznetsova et al., 2013)  package. 

The SensMixed package includes a shiny application (RStudio, 2013), which apart from providing the GUI for the analysis of mixed effects models, also includes such crucial functionalities as importing the data in different formats, presenting results in tables and plots as well as saving them. This makes the package together with the application very valuable for non-statisticians.  The usefulness of the package will be illustrated on examples coming from the sensory and consumer data. 

The SensMixed package can be download from https://r-forge.r-project.org/R/?group_id=1433</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Regression"); GoBack("188");</script></p></dd>
  <dt id="191" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-191" style="cursor: pointer;">Simple reproducibility with the checkpoint package</a> <span style="font-weight: normal; font-style: italic;">(David Smith)</span></dt>
  <dd id="a-191" class="collapse"><p style="padding-top: 0.5em;">David Smith, Revolution Analytics (Microsoft):</p><blockquote>Almost every R script uses packages, but the ever-changing ecosystem of package repositories presents a challenge for reproducible data analysis. It is difficult to use — and especially, to share — R code that depends on packages, when the results may be dependent on specific package versions being used. In this talk I will demonstrate how Revolution R Open and the “checkpoint” package address this problem.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Reproducibility"); GoBack("191");</script></p></dd>
  <dd id="a-213" class="collapse"><p style="padding-top: 0.5em;">Andrew Dolman, Dept. of Freshwater Conservation, Brandenburg University of Technology Cottbus - Senftenberg, Bad Saarow, Germany:</p><blockquote>To better understand complex natural systems, ecologists combine experiments on microcosms with simulations using systems of ordinary differential equations (ODEs). Good communication is required between theorists, modellers and experimentalists; and computational performance becomes an issue for parameter estimation by maximum likelihood or MCMC. Here we present a workflow in R that addresses these challenges.

The rodeo package allows ODE models to be written as plain text tables, binding mathematical model components with documentation, but separating them from platform specific code – improving communication between modellers and theorists. 

rodeo then generates a stoichiometric matrix form of the model in either R, or FORTRAN95 code. Matrix notation eliminates many redundant terms from the ODE, and FORTRAN provides greater computational performance.

The ODE is integrated numerically using solvers provided by the deSolve package, which allows experimental manipulation of the simulated microcosms via events and forcings.

FME provides functions fitting the model to microcosm data via maximum likelihood and MCMC.

Finally, Shiny apps reveal the behaviour and capabilities of the models and greatly enhance communication between modellers and experimentalists.

We illustrate this workflow by modelling a series of nutrient addition bioassays, microcosm experiments used to determine the nutrient limiting phytoplankton growth in lakes.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Ecology"); GoBack("213");</script></p></dd>
  <dt id="219" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-219" style="cursor: pointer;">Software Standards in the R Community: An Analysis</a> <span style="font-weight: normal; font-style: italic;">(Oliver Keyes)</span></dt>
  <dd id="a-219" class="collapse"><p style="padding-top: 0.5em;">Oliver Keyes, Wikimedia Foundation:</p><blockquote>This work reports on research by Oliver Keyes and Jennifer Bryan on the software engineering standards used by the R community in CRAN-hosted packages, along with ways to improve those standards.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope1"); GoBack("219");</script></p></dd>
  <dt id="232" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-232" style="cursor: pointer;">Some lessons relevant to including external libraries in your R package</a> <span style="font-weight: normal; font-style: italic;">(Kasper D. Hansen)</span></dt>
  <dd id="a-232" class="collapse"><p style="padding-top: 0.5em;">Kasper D. Hansen, Department of Biostatistics, Johns Hopkins University, Baltimore, USA:</p><blockquote>It is tempting - and sometimes necessary - to depend on external libraries of code written by someone else in a non-R language. However, such dependency can be a liability if the external library is not sufficiently well written, especially in terms of portability.  I illustrate my experience with this situation with lessons learned from development and maintanence over several years of the Bioconductor packages affxparser and Rgraphviz.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Interfacing"); GoBack("232");</script></p></dd>
  <dt id="215" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-215" style="cursor: pointer;">Spatial Econometrics Models with R-INLA</a> <span style="font-weight: normal; font-style: italic;">(Virgilio Gomez-Rubio)</span></dt>
  <dd id="a-215" class="collapse"><p style="padding-top: 0.5em;">Virgilio Gomez-Rubio, Department of Mathematics, University of Castilla-La Mancha, Albacete, Spain:</p><blockquote>The Integrated Nested Laplace Approximation (INLA) is widely used for approximate inference for Bayesian models. INLA focuses on marginal inference for models with observations from the Exponential family and latent effects that can be expressed as a Gaussian Markov Random Field. Recent developments include a new latent class to fit Spatial Econometrics models. This new 'slm' class is included in the R-INLA package and can be used to fit spatially autoregressive models that are either autoregressive on the response or the error term. By using the R-INLA package it is possible to use other built-in features such as computation of the DIC for model selection, prediction of missing observations and others. Another important topic in Spatial Econometrics is the computation of the impacts or spillover effects of the covariates. This can seldom be addressed with INLA as it requires multivariate inference, but we will also show how impacts can be approximated. The use of the 'slm' class will be illustrated using examples on housing in Boston and the probability of reopening a business in the aftermath of hurricane Katrina.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Spatial"); GoBack("215");</script></p></dd>
  <dt id="178" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-178" style="cursor: pointer;">Spatial regression of quantiles based on parametric distributions</a> <span style="font-weight: normal; font-style: italic;">(Chenjerai Kathy Mutambanengwe)</span></dt>
  <dd id="a-178" class="collapse"><p style="padding-top: 0.5em;">Chenjerai Kathy Mutambanengwe, OpenAnalytics, Antwerp, Belgium:</p><blockquote>Quantile regression has garnered great interest in the recent years. This is because the mean (or variance) of a random variable is not always of interest to investigators. For the special case of spatially correlated data, estimation of the quantiles becomes slightly more challenging due to the need to take into account the spatial correlations between measurements, and the most commonly used R package quantreq does not exhaustively cater for such situations. We develop Bayesian methods for estimating the spatially varying quantiles, whilst allowing the effects of covariates to also vary conditionally on the quantiles. In this presentation we focus on the log-location-scale family of distributions, thereby restricting to a model-based approach as opposed to the model-free approach. These methods are made available in the spatQuantReg package and implemented in R. The methodology will be highlighted in the first part of the presentation, and some analysis will be made on a real data example of TSH levels from Galicia, Spain.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Regression"); GoBack("178");</script></p></dd>
  <dt id="40" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-40" style="cursor: pointer;">Spatio-Temporal Analysis of Epidemic Phenomena Using the R Package surveillance</a> <span style="font-weight: normal; font-style: italic;">(Sebastian Meyer)</span></dt>
  <dd id="a-40" class="collapse"><p style="padding-top: 0.5em;">Sebastian Meyer, Epidemiology, Biostatistics and Prevention Institute, University of Zurich, Zurich, Switzerland:</p><blockquote>The availability of geocoded health data and the inherent temporal structure of communicable diseases have led to an increased interest in statistical models and software for spatio-temporal data with epidemic features. The open source R package surveillance can handle various levels of aggregation at which infective events have been recorded: individual-level time-stamped geo-referenced data (case reports) in either continuous space or discrete space, as well as counts aggregated by period and region. For each of these data types, the surveillance package implements tools for visualization, likelihoood inference and simulation from recently developed statistical regression frameworks capturing endemic and epidemic dynamics. This presentation is intended as a guide to the spatio-temporal modeling of epidemic phenomena, exemplified by analyses of public health surveillance data on measles and invasive meningococcal disease.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Spatial"); GoBack("40");</script></p></dd>
  <dt id="220" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-220" style="cursor: pointer;">Statistical consulting using R: a DRY approach from the Australian outback</a> <span style="font-weight: normal; font-style: italic;">(Peter Baker)</span></dt>
  <dd id="a-220" class="collapse"><p style="padding-top: 0.5em;">Peter Baker, School of Public Health, University of Queensland, Herston, QLD, Australia:</p><blockquote>As a statistical consultant, I often find myself repeating the same steps when analysing data for different projects. Reusing R syntax and functions helps to improve efficiency and save time. Even bigger gains can be made by employing more automatic computing tools like GNU make and R packages like dryworkflow and ProjectTemplate. These tools help to implement a don't repeat yourself (DRY) approach.

Since the early 90s I’ve used GNU make to project manage data analysis using GENSTAT, SAS, R and other statistical packages. It is very efficient in only re–running analyses or producing reports when dependencies such as data, R syntax or Rmarkdown (.R, .Rnw or .Rmd) files change. Unfortunately, make doesn't provide rules for R and Rmarkdown so I have developed pattern rules which can be easily used by anyone. These make rules are also integrated into the R package 'dryworkflow' which follows the ideas in Long (2009) [The Workflow of Data Analysis Using Stata]. 'dryworkflow' streamlines many of the steps in a data analysis project.

Make pattern rules and the dryworkflow package will be briefly outlined and are available at github. Details may be found at http://www.petebaker.id.au/.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Business"); GoBack("220");</script></p></dd>
  <dt id="16" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-16" style="cursor: pointer;">Stratified medicine using the partykit package</a> <span style="font-weight: normal; font-style: italic;">(Heidi Seibold)</span></dt>
  <dd id="a-16" class="collapse"><p style="padding-top: 0.5em;">Heidi Seibold, Epidemiology, Biostatistics and Prevention Institute, University of Zurich, Switzerland:</p><blockquote>The identification of patient subgroups with differential treatment effects
is the first step towards individualised treatments.  A current draft
guideline by the EMA discusses potentials and problems in subgroup
analyses and formulated challenges to the development of appropriate statistical
procedures for the data-driven identification of patient subgroups.  We
introduce model-based recursive partitioning – which is implemented in the
R partykit package – as a procedure for the automated detection of patient 
subgroups that are identifiable by predictive factors.  The method starts with a 
model for the overall treatment effect as defined for the primary analysis in the 
study protocol and uses measures for detecting parameter instabilities in this 
treatment effect.  The procedure produces a segmented model with differential 
treatment parameters corresponding to each patient subgroup.  The subgroups are 
linked to predictive factors by means of a decision tree.  The method 
is applied to the search for subgroups of patients suffering from amyotrophic
lateral sclerosis that differ with respect to their Riluzole treatment
effect, the only currently approved drug for this disease.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Medicine"); GoBack("16");</script></p></dd>
  <dt id="95" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-95" style="cursor: pointer;">Supporting the "Rapi" C-language API in an R-compatible engine</a> <span style="font-weight: normal; font-style: italic;">(Michael Sannella)</span></dt>
  <dd id="a-95" class="collapse"><p style="padding-top: 0.5em;">Michael Sannella, TIBCO Software Inc., Seattle, WA 98109, USA:</p><blockquote>Much of the value of the R engine is provided by the large set of
external packages available from repositories such as CRAN.  While
many of these packages are "pure" R-language packages, many important
and popular packages contain C-language libraries that access the R
engine through R's C-language API (which I call "Rapi").

My group at TIBCO is currently developing TERR (TIBCO Enterprise
Runtime for R), an R-compatible engine.  Our users want to be able to
use many CRAN packages including those incorporating C libraries, so
TERR has to support the Rapi API.  Our goal is to allow our users to
download binary packages from CRAN (or build source packages with
open-source R), and then load and use them unchanged in TERR.

This presentation will discuss our experiences working with packages
using Rapi, the current state of TERR's support for Rapi, and our
efforts to increase the set of packages TERR can support.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Commercial"); GoBack("95");</script></p></dd>
  <dt id="203" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-203" style="cursor: pointer;">SWOT analysis on using R for online training</a> <span style="font-weight: normal; font-style: italic;">(Miranda Y Mortlock)</span></dt>
  <dd id="a-203" class="collapse"><p style="padding-top: 0.5em;">Miranda Y Mortlock, School of Agriculture and Food Science, University of Queensland, St Lucia, Qld, Australia:</p><blockquote>This will present a SWOT (Strengths Weaknesses Opportunities and Threats) analysis on using R in an  online courses. R and RStudio were chosen as the software to extend statistical support via a bespoke online statistical training (BeST) site. The site is being developed as a Special Private Online Course (SPOC) and has potential to become a Massive Open Online Course (MOOC) in the future. It is aimed at use in Africa and South Asia, and will have the ability to influence scientist that are working in research projects supporting millions of small farmers in these regions. BeST is mostly aimed at African agricultural scientists who do not have statistical support because they may be either based regionally or are the field and away from consulting centres of statistics. The BeST site is under development, using a modular approach to support a range of applied methods. The use of R and RStudio will be given a critical but practical analysis. </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Teaching1"); GoBack("203");</script></p></dd>
  <dt id="245" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-245" style="cursor: pointer;">Taking testing to another level: testwhat</a> <span style="font-weight: normal; font-style: italic;">(Filip Schouwenaars)</span></dt>
  <dd id="a-245" class="collapse"><p style="padding-top: 0.5em;">Filip Schouwenaars, DataCamp:</p><blockquote>The architecture of the testthat R package (the de facto standard for writing unit tests for R packages) is very generic and suits itself to extension and adaptation. DataCamp has adapted the testthat package to be used on the R backend of its interactive learning platform. By defining a new type of reporter and adding user-friendly test functions that are designed specifically for testing the correctness of a student's submission, the testwhat package now exists as a wrapper around testthat (https://github.com/Data-Camp/testwhat). The talk intends to give a brief overview of testthat and its internals, followed by a more detailed discussion about testwhat and the elegant adaptations that have been made to leverage testthat's functionality for an entirely different application.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Datamanagement"); GoBack("245");</script></p></dd>
  <dt id="205" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-205" style="cursor: pointer;">TAM: An R Package for Item Response Modelling</a> <span style="font-weight: normal; font-style: italic;">(Thomas Kiefer)</span></dt>
  <dd id="a-205" class="collapse"><p style="padding-top: 0.5em;">Thomas Kiefer, Federal Institute for Educational Research, Innovation and Development of the Austrian School System, Salzburg, Austria, and 
Alexander Robitzsch and Margaret Wu, Victoria University, Melbourne, Australia:</p><blockquote>Item response theory (IRT) embeds a set of statistical models that are used while developing instruments for testing and diagnosing subjects, and analyzing the resulting data – for instance, in educational large-scale assessments such as PISA (Programme for International Student Assessment) as well as in clinical and experimental psychology. Items are administered to subjects in order to measure their latent trait (e.g., ability). IRT models can be divided into several model families regarding the distributional assumptions of the latent trait and assumptions about item response probabilities which are (often) motivated by substantive theory.

This talk presents the R package TAM, which provides the necessary tools for the practitioner to apply IRT models. That is, estimates of item characteristics and latent traits are provided amongst other measures like item fit and model fit statistics. There are several (commercial) IRT software packages such as ConQuest, BILOG, IRTPRO or Mplus and several R packages such as mirt, eRm and ltm. Yet, the R package TAM has a considerable processing speed, which is achieved by using an accompanying C++ library. To ease the specification of the broad class of IRT models implemented in TAM, a modelling syntax based on the R package lavaan is introduced.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Methodology1"); GoBack("205");</script></p></dd>
  <dt id="249" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-249" style="cursor: pointer;">Teaching R in (an online) class</a> <span style="font-weight: normal; font-style: italic;">(Jonathan Cornelissen)</span></dt>
  <dd id="a-249" class="collapse"><p style="padding-top: 0.5em;">Jonathan Cornelissen, DataCamp:</p><blockquote>Over 120,000 people have started a free R course on DataCamp so far (over 50k the "introduction to R”: https://www.datacamp.com/courses/introduction-to-r). We have received numerous requests from Professors who use our free introduction to R course in their classes to get more insight in student’s performance. Therefore, we will launch a new interface that gives Professors insight in how their students are learning R. Additionally, we’ll give a brief intro on how to create courses on DataCamp for both the traditional interface and the new swirl interface https://www.datacamp.com/swirl-r-tutorial. Finally, we will share some key insights based on analyzing the data of over 100k students learning R.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Teaching2"); GoBack("249");</script></p></dd>
  <dt id="60" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-60" style="cursor: pointer;">Teaching R in heterogeneous settings: Lessons learned</a> <span style="font-weight: normal; font-style: italic;">(Matthias Gehrke)</span></dt>
  <dd id="a-60" class="collapse"><p style="padding-top: 0.5em;">Matthias Gehrke, ifes, Institut fuer Empirie und Statistik, FOM University of Applied Sciences, Germany:</p><blockquote>There is a rich field of economic and business applications for statistical data analysis and R: From Human Resources to Finance. In 2013 the FOM, a private university of applied sciences for professionals studying while working with more than 30 study centres across Germany, decided to use R compulsory in all statistical courses in all the different Master programs and in all study centres.

By using the R Commander (Fox, 2005), real life data sets, step-by-step installation guidelines as well offering a portable version with preinstalled packages and a support email address we tried to facilitate and motivate the start and working with R.

Coping with the heterogeneity of students, lecturers and computer platforms like Windows and Mac OS there are some pitfalls in such a teaching project, but also some opportunities, which were also revealed in an evaluation of students and lectures alike.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Teaching1"); GoBack("60");</script></p></dd>
  <dt id="204" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-204" style="cursor: pointer;">Teaching R using the github ecosystem</a> <span style="font-weight: normal; font-style: italic;">(Colin Rundel)</span></dt>
  <dd id="a-204" class="collapse"><p style="padding-top: 0.5em;">Colin Rundel, Department of Statistical Science, Duke University, USA:</p><blockquote>In this talk we will discuss an R based Master's level statistical computing course taught for the first time at Duke University in the Fall of 2014. The talk will focus on ways in which statisticians can adopt the tools and best practices of software engineers and other working practictioners to teach and improve the computing abilities of our students. We will focus in particular on the adoption of github and connected services like Travis-CI as a platform for teaching students how to produce R based analyses that are of high quality, reproducible, and throughly tested while working in a team-based collaborative environment. We will discuss in detail course structure and logistics as well as give examples from the case studies used in the course.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Teaching2"); GoBack("204");</script></p></dd>
  <dt id="147" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-147" style="cursor: pointer;">The DataRobot R Package</a> <span style="font-weight: normal; font-style: italic;">(Ron Pearson)</span></dt>
  <dd id="a-147" class="collapse"><p style="padding-top: 0.5em;">Ron Pearson, Data Scientist, DataRobot, Boston, MA, USA:</p><blockquote>This talk describes DataRobot, a new R package that allows users to interact with the DataRobot modeling engine. This API allows the user to create a new DataRobot project by specifying a dataset, a target variable, and a fitting metric. The modeling engine then builds a large collection of models (typically ~ 30 - 60), which are fit and tuned by cross-validation and ranked in order of their validation set performance. The models in this collection encompass a wide variety of types, including linear regression models, random forests, boosted trees, and support vector machines. The R package described here allows the user to characterize the models obtained, add custom R models to the project, and generate predictions from any of these models for new datasets. This talk demonstrates the DataRobot package by applying it to two examples.  The first is a random permutation-based assessment of variable influence, obtaining results for all of the models in the project, which were fit to data from the mlbench.friedman1 simulator in the R package mlbench.  The second example demonstrates the use of partial dependence plots to understand performance differences between very different model structures, all fit to a concrete compressive strength dataset.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Commercial"); GoBack("147");</script></p></dd>
  <dt id="19" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-19" style="cursor: pointer;">The dendextend R package for manipulation, visualization and comparison of dendograms</a> <span style="font-weight: normal; font-style: italic;">(Tal Galili)</span></dt>
  <dd id="a-19" class="collapse"><p style="padding-top: 0.5em;">Tal Galili, Tel Aviv University:</p><blockquote>A dendrogram is a tree diagram which is often used to visualize a hierarchical clustering of items. Dendrograms are used in many disciplines, ranging from Phylogenetic Trees in computational biology to Lexomic Trees in text analysis. Hierarchical clustering in R is commonly performed using the hclust function. When a more sophisticated visualization is desired, the hclust object is often coerced into a dendrogram object, which in turn is modified and plotted.
The dendextend R package extends the palette of base R functions for the dendrogram class, offering easier manipulation of a dendrogram's shape, color and content through functions such as rotate, prune, color_labels, color_branches, cutree, and more. These can be plotted in based R and ggplot2.
dendextend also provides the tools for comparing the similarity of two dendrograms to one another: either graphically (using a tanglegram plot, or Bk plots), or statistically (with Cophenetic correlation, Baker's Gamma, etc) - while enabling bootstrap and permutation tests for comparing the trees. The dendextendRcpp package provides C++ faster implementations for some of the more computationally intensive functions.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Visualisation1"); GoBack("19");</script></p></dd>
  <dt id="14" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-14" style="cursor: pointer;">The gridGraphics Package</a> <span style="font-weight: normal; font-style: italic;">(Paul Murrell)</span></dt>
  <dd id="a-14" class="collapse"><p style="padding-top: 0.5em;">Paul Murrell, Department of Statistics, The University of Auckland, Auckland, New Zealand:</p><blockquote>Many important R packages provide graphics functions based on the
"base graphics" system (they depend on the 'graphics' package), but several other important R packages, including 'lattice' and 'ggplot2', provide functions based on the alternative "grid graphics" system (they depend on the 'grid' package).  Unfortunately, the base graphics system and the grid graphics system do not integrate well with each other and this can lead to a number of problems: users can become confused if they accidentally combine functions from the two graphics systems; plots produced with base graphics do not have access to the more powerful customisation features of the grid graphics system; and
there can be duplication of effort when developers produce two
versions of the same plot – one based on 'graphics' and one based on 'grid'.

This talk describes the new 'gridGraphics' package, which provides functions to convert any plot that has been drawn with functions based on the 'graphics' package to an identical plot drawn with the 'grid' package.  The talk will explain the background to the problem of having two distinct graphics systems, show how to use the 'gridGraphics' package, and demonstrate the value of the new package via a short case study.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Visualisation2"); GoBack("14");</script></p></dd>
  <dt id="89" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-89" style="cursor: pointer;">The ilc package</a> <span style="font-weight: normal; font-style: italic;">(Han Lin Shang)</span></dt>
  <dd id="a-89" class="collapse"><p style="padding-top: 0.5em;">Han Lin Shang, Research School of Finance, Actuarial Studies and Applied Statistics, Australian National University, Canberra, Australia:</p><blockquote>We implement a specialised iterative regression methodology in R for the analysis of age-period mortality data based on a class of generalised Lee-Carter (LC) type modelling structures. The LC-based modelling frameworks is viewed in the current literature as among the most efficient and transparent methods of modelling and forecasting mortality improvements. Thus, we make use of the Generalised Linear Model (GLM) modelling approach discussed in Renshaw and Haberman (2006), which extends the basic LC model and proposes to make use of a tailored iterative process to generate parameter estimates based on Poisson likelihood. Furthermore, building on this methodology we develop and implement a stratified LC model for the measurement of the additive effect on the log scale of an explanatory factor (other than age and time). This modelling methodology is implemented in a publicly available ilc package that facilitates both the preparation of mortality data and the fitting and analysis of the given log-linear modelling structures. The package also incorporates methods to produce forecasts of future mortality rates and to compute the corresponding future life expectancy. </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Regression"); GoBack("89");</script></p></dd>
  <dt id="231" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-231" style="cursor: pointer;">The METACRAN experiment</a> <span style="font-weight: normal; font-style: italic;">(Gabor Csardi)</span></dt>
  <dd id="a-231" class="collapse"><p style="padding-top: 0.5em;">Gabor Csardi, Department of Statistics, Harvard University, Cambridge, MA, USA:</p><blockquote>CRAN is serving us well as the main point of distributing
R packages, and has been one of the main reasong behind
the success of R.

METACRAN is an experiment to provide additional services
on top of the CRAN infrastructure:
<ul>
<li>A searchable code mirror, with diffs between package
   versions, and the ability to create personalized versions
   of R packages.</li>
<li>A database and API of CRAN metadata.</li>
<li>A package search engine and web site for package discovery.</li>
<li>A package manager.</li>
<li>A continuous integration wrapper to build and check
   R packages with various R versions.</li>
<li>A database and API of CRAN package downloads
   from the cloud CRAN mirror.</li>
</ul>
In this presentation I briefly introduce these services.

Note that METACRAN is not a CRAN project, and it is developed and
maintained independently of CRAN.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope6"); GoBack("231");</script></p></dd>
  <dt id="30" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-30" style="cursor: pointer;">The Network Structure of R Packages</a> <span style="font-weight: normal; font-style: italic;">(Andrie de Vries)</span></dt>
  <dd id="a-30" class="collapse"><p style="padding-top: 0.5em;">Andrie de Vries, Revolution Analytics:</p><blockquote>Over the past decade, R evolved from being a somewhat specialized platform supporting statisticians to a widely used tool at the center of the new developments in data science.

Much of the growth in the capabilities of R is due to the success of R's package repository system. CRAN (&gt; 6,000 packages) and BioConductor (&gt; 900 packages) are the two primary repositories. These repositories
 are managed independently with different release cycles and different conformance policies.

In this presentation, I use statistical network theory and the algorithms implemented in various R packages including igraph and miniCRAN to analyze and visualize the connectivity structure of packages in CRAN and BioConductor. I also test the hypothesis that the different management policies of the two repositories are reflected in the properties of their graph networks.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope4"); GoBack("30");</script></p></dd>
  <dt id="33" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-33" style="cursor: pointer;">Tiny Data, Approximate Bayesian Computation and the Socks of Karl Broman</a> <span style="font-weight: normal; font-style: italic;">(Rasmus Bååth)</span></dt>
  <dd id="a-33" class="collapse"><p style="padding-top: 0.5em;">Rasmus Bååth, Lund university Cognitive Science:</p><blockquote>Big data is all the rage, but sometimes you don't have big data. Sometimes you don't even have average size data. Sometimes you only have eleven unique socks. This is the story about how a tweet by esteemed biostatistician Karl Broman resulted in a solution to the old question: How many socks are there in my laundry? 

Key to the solution was using R to do approximate Bayesian computation, a conceptually simple technique that allows fitting any generative model to a data set. Approximate Bayesian computation is easily implemented in R using the standard random number generators (rnorm, runif, etc.) and allows for flexible inclusion of prior information, which can be useful when modeling tiny datasets. Using the sock problem as a case study, this talk will introduce modeling of tiny data by approximate Bayesian computation using R.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope2"); GoBack("33");</script></p></dd>
  <dt id="20" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-20" style="cursor: pointer;">tmap: creating thematic maps in a flexible way</a> <span style="font-weight: normal; font-style: italic;">(Martijn Tennekes)</span></dt>
  <dd id="a-20" class="collapse"><p style="padding-top: 0.5em;">Martijn Tennekes, Statistics Netherlands, Heerlen, The Netherlands:</p><blockquote>A thematic map is a geographical map in which statistical data are visualized. The theme refers to the statistical phenomena that is shown, such as the unemployment rate at municipal level. 
The best known thematic map type is the choropleth, where regions are coloured according to a statistical variable, for instance unemployment rate or population density. Another popular thematic map type is the bubble map, in which the sizes of the bubbles are defined by a statistical variable, for instance city population.

With the tmap package, thematic maps can be generated with great flexibility. The syntax for creating plots is similar to that of ggplot2. A thematic map is created by stacking layers, for instance one for colouring municipalities, one for thick borders of higher level regions, and one for text labels. It is also possible to create small multiples. Layout settings such as legend positioning and margins can be specified for particular shape objects by layout themes.

The standard work flow that is needed to create a thematic map is embedded in tmap by several convenient functions, e.g., for reading ESRI shape files, setting the proper projection, appending data, and calculating densities from absolute values.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Visualisation1"); GoBack("20");</script></p></dd>
  <dt id="110" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-110" style="cursor: pointer;">Unsupervised Clustering and Meta-Analysis using Gaussian Mixture Copula Models</a> <span style="font-weight: normal; font-style: italic;">(Anders Ellern Bilgrau)</span></dt>
  <dd id="a-110" class="collapse"><p style="padding-top: 0.5em;">Anders Ellern Bilgrau, Department of Mathematical Sciences, Aalborg University, Denmark:</p><blockquote>Methods for unsupervised clustering is an important part of the statistical toolbox in numerous scientific disciplines. Tewari, Giering, and Raghunathan (2011) proposed to use so-called semi-parametric Gaussian Mixture Copula Models (GMCM) for general unsupervised clustering when obvious non-gaussian clusters are present. Li, Brown, Huang, and Bickel (2011) independently discussed a special case of these GMCMs as a novel approach to meta-analysis in high-dimensional settings. GMCMs have attractive properties which make them highly flexible and therefore interesting alternatives to well-established methods. However, parameter estimation is hard because of intrinsic identifiability issues and intractable likelihood functions. Both aforementioned papers discuss similar expectation-maximization-like (EM) algorithms as their pseudo maximum likelihood estimation procedure. We have written an improved implementation in R of both classes of GMCMs along with various alternative optimization routines to the EM algorithm. The software is freely available on CRAN through the R-package GMCM. The implementation via RcppArmadillo is fast, general, and optimized for very large numbers of observations. </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Clustering"); GoBack("110");</script></p></dd>
  <dt id="104" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-104" style="cursor: pointer;">Using R and free software to improve the delivery of life changing medicine to patients</a> <span style="font-weight: normal; font-style: italic;">(David Ruau)</span></dt>
  <dd id="a-104" class="collapse"><p style="padding-top: 0.5em;">David Ruau, AstraZeneca, Cambridge, UK:</p><blockquote>The methods used by statisticians in the pharmaceutical industry rapidly evolve through constant challenges, but the toolset available to statisticians and data scientists has been largely static.  However, a new generation of quantitative scientists is introducing tools like R and Shiny. In this presentation we will present some use cases where the rapid development and deployment of R packages has made a huge difference. In the first example, we implemented a classic Bayesian method used to predict the probability of technical success in phase III of clinical trials based on results from phase II. The release of this R package (assurance) first internally and then on GitHub not only enabled project teams to consistently integrate this information when designing their trial, but also enabled us to validate the R package through a wider community. In the second use case we looked into one of the challenges our statisticians have when interacting with contract research organisations. Through development of an R package and a Shiny interface we harmonized the simulation and prediction of time-to-event in oncology clinical trials saving considerable time and improving consistency.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Medicine"); GoBack("104");</script></p></dd>
  <dt id="192" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-192" style="cursor: pointer;">Using R Efficiently with Large Databases</a> <span style="font-weight: normal; font-style: italic;">(Michael Wurst)</span></dt>
  <dd id="a-192" class="collapse"><p style="padding-top: 0.5em;">Michael Wurst, IBM Research and Development, Germany:</p><blockquote>This session gives a survey on open technologies that help statisticians to work more efficiently with large data warehousing systems. We will especially discuss how data warehouse scale-out and indexing structures, such as columnar storage, can be exploited from R to increase scalability and reduce response time. The session should also serve as a platform to discuss limitations, open challenges and feature requests from the point of view of R users that work with large databases.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Databases"); GoBack("192");</script></p></dd>
  <dt id="152" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-152" style="cursor: pointer;">Using R for natural gas market balancing in the Czech republic</a> <span style="font-weight: normal; font-style: italic;">(Ivan Kasanický)</span></dt>
  <dd id="a-152" class="collapse"><p style="padding-top: 0.5em;">Ivan Kasanický, Czech Institute of Informatics, Robotics, and Cybernetics, CTU in Prague:</p><blockquote>An open gas market, which EU is gradually heading to, requires daily balancing. This is generally a complicated task since most of the end users’ consumption is read in longer time intervals (i.e. monthly, annually etc.). Moreover, the reading intervals for the different customers can be different or can be even totally irregular. The network balance input data have therefore various time resolutions from hourly data (network delivery points, large customers) to monthly, annual or even longer period data (smaller customers). 
We have developed several statistical models of gas consumption using mainly temperature as an explanatory variable. These models can be used for disaggregation of consumption data to the daily values, but also in some cases for forecasting.
In the proposed contribution we will demonstrate the whole process of developing the mentioned models, which has been completely done using the R environment. The process consists mainly of large data preprocessing, model selection, and parameter estimation. Since primary users of these models are usually not very familiar with R, we have developed two R packages containing self-explanatory functions for data processing, estimation of model parameters and evaluating the prediction (either disaggregated values or forecast). </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Casestudy"); GoBack("152");</script></p></dd>
  <dt id="184" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-184" style="cursor: pointer;">Using R for small area estimation in the Norwegian National Forest Inventory</a> <span style="font-weight: normal; font-style: italic;">(Johannes Breidenbach)</span></dt>
  <dd id="a-184" class="collapse"><p style="padding-top: 0.5em;">Johannes Breidenbach, National Forest Inventory, Norwegian Forest and Landscape Institute:</p><blockquote>The Norwegian National Forest Inventory (NFI) is a national survey program for monitoring the state and development of forests based on more than 22,000 permanent inventory sample plots. One fifth of the plots within forests are visited every year to measure trees.
R is an important tool for data analysis in the NFI. For example, all analysis required for the reporting duties arising from the UN Climate Convention and its Kyoto Protocol are based on R. Another important field of application is small area estimation (SAE) for unplanned domains with few sample plots. Auxiliary variables obtained from airborne laser scanning or image matching are used in combination with field sample plots to obtain estimates of biomass or timber volume with acceptable levels of precision. Some methods are implemented in the R package JoSAE.
Unit and area-level SAE methods are currently under consideration for future applications and are compared in this study.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Casestudy"); GoBack("184");</script></p></dd>
  <dt id="153" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-153" style="cursor: pointer;">Using R in photobiology</a> <span style="font-weight: normal; font-style: italic;">(Pedro J. Aphalo)</span></dt>
  <dd id="a-153" class="collapse"><p style="padding-top: 0.5em;">Pedro J. Aphalo, Department of Biosciences, University of Helsinki, Finland:</p><blockquote>The packages in the R4Photobiology suite implement data import, calculations and plotting related to handling of spectral data as used in photobiology, plus some additional functions for day length and sun position calculations. The main aim is to make it easier for biologists to quantify and describe the visible and ultraviolet radiation conditions used in experiments or monitored in nature, in a standardized and consistent way. In the spirit of reproducible research the interface, is not visual or menu based, and all functionality is available in knitr scripts. My design is based on the idea of mirroring as much as possible the "concepts" used in the user domain, photobiology. The design is based on a core package and additional packages providing data examples and functions for specific fields, in the hope that contributions will in the future expand the usefulness of the suite. Plotting functions are built using ggplot2 as a basis, but they are grouped in a separate package, making parallel future implementations based on gvis or other plotting "systems" possible. An object oriented design is used. The capabilities of the packages will be described, and the design of the interface and its implementation, will be presented.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope6"); GoBack("153");</script></p></dd>
  <dt id="206" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-206" style="cursor: pointer;">Using R in Production</a> <span style="font-weight: normal; font-style: italic;">(Stefan Milton Bache)</span></dt>
  <dd id="a-206" class="collapse"><p style="padding-top: 0.5em;">Stefan Milton Bache, Danske Commodities A/S, Aarhus, Denmark:</p><blockquote>The R programming language is becoming an integral part of
data solutions and analyses in many production environments.
This is no surprise: it is very powerful and goals are often
very quickly accomplished with R compared to many of its
competitors, and it is therefore a primary tool of choice for
many statisticians, data scientists, and the like.

There can be some fundamental differences in reasonable 
requirements for R solutions produced for an academic purpose 
and those meant for a production environment. There are also 
some differences in the way they can *create value* to a 
business.

In this talk I share some of my thoughts and experiences 
with R in a production environment, and share some simple tips 
to keep in mind when preparing R solutions/scripts for 
business use, and demonstrate a few simple packages that can help avoid some common dangers and frustrations. </blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Business"); GoBack("206");</script></p></dd>
  <dt id="134" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-134" style="cursor: pointer;">Using R, RStudio, and Docker for introductory statistics teaching</a> <span style="font-weight: normal; font-style: italic;">(Mine Cetinkaya-Rundel)</span></dt>
  <dd id="a-134" class="collapse"><p style="padding-top: 0.5em;">Mine Cetinkaya-Rundel, Department of Statistical Science, Duke University, USA:</p><blockquote>Docker is a relatively new Linux container technology that can be used as a lightweight form of virtualization. At Duke University we have been using Docker containers to provide students with anywhere access to RStudio Server via the campus-wide authentication system. This solution eliminates the need for students to locally install R and RStudio, and hence makes getting started with R considerably easier for students who are brand new to statistics and computing. This solution also provides secure self-contained virtualized environments for each student with specified quotas for system resources. Additionally, it simplifies the maintenance and support while allowing for deployment across multiple heterogeneous physical systems. In this talk we will discuss implementation and benefits of using Docker and RStudio Server as an environment for teaching R at the introductory level.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Teaching2"); GoBack("134");</script></p></dd>
  <dt id="248" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-248" style="cursor: pointer;">Web Application Teaching Tools for Statistics Using Shiny and R</a> <span style="font-weight: normal; font-style: italic;">(Gail Potter)</span></dt>
  <dd id="a-248" class="collapse"><p style="padding-top: 0.5em;">Gail Potter, Department of Statistics, California Polytechnic State University, San Luis Obispo, CA, U.S.A.:</p><blockquote>Technology plays a critical role in supporting statistics education, and student comprehension is improved when simulations accompanied by dynamic visualizations are employed in the class. Several web-based applets programmed in Javascript are publicly available (e.g. www.rossmanchance.com).  These provide a user-friendly interface which is accessible and appealing to students in introductory statistics courses. However, many statistics educators are not fluent in Javascript so are unable to tailor these apps or develop their own.  We provide an introduction to Shiny, a web application framework for R created by RStudio, which facilitates applet development for educators who are familiar with R.  We illustrate the utility, convenience, and versatility of Shiny through twenty freely available apps covering a range of topics and levels.  While our gallery of twenty apps is currently under review, we are limiting access to the site, but a subset of these apps is found at <a href="http://www.gailpotter.org">http://www.gailpotter.org</a>.  For example, one app compares the robustness of the Mann Whitney U-Test to the t-test, and another graphically demonstrates the Probability Integral Tranform and the Accept-Reject Algorithm for random variable generation.  Our source code is publicly available so that educators may tailor our apps as desired.   As the movement towards online education and web-based teaching tools gains momentum, educators who adapt to cutting-edge technology such as Shiny will remain at the forefront.</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Teaching2"); GoBack("248");</script></p></dd>
  <dt id="17" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-17" style="cursor: pointer;">Web scraping with R - A fast track overview</a> <span style="font-weight: normal; font-style: italic;">(Peter Meißner)</span></dt>
  <dd id="a-17" class="collapse"><p style="padding-top: 0.5em;">Peter Meißner, Department of Politics and Administration, University Konstanz, Germany:</p><blockquote>The presentation is thought to give an overview on how to best approach the task of collecting data from the web with the R programming environment and its packages. 
While web techniques like HTML, XML, JSON, HTTP, JavaScript, web APIs, … are mainly easy to understand as such, their abundance as well as a literature either written for computer scientists or web designer but seldom for those ‘only’ interested in getting the data, pose serious hurdles on scientists in need to collect data but lacking more technical backgrounds. 
The presentation aims at providing a framework to understand web techniques and the process of conducting data gathering within the web. Furthermore relevant ‘best practice’ R packages and templates will be introduced along the way. 

</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Networks"); GoBack("17");</script></p></dd>
  <dt id="233" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-233" style="cursor: pointer;">What's new in igraph and networks</a> <span style="font-weight: normal; font-style: italic;">(Gabor Csardi)</span></dt>
  <dd id="a-233" class="collapse"><p style="padding-top: 0.5em;">Gabor Csardi, Department of Statistics, Harvard University, Cambridge, MA, USA:</p><blockquote>igraph is the premier R package for the analysis
of network data and it went through major
restructuring recently and has changed a lot
since last time it was featured at useR! in 2008.

This talk introduces the new/updated features of igraph:
- Simplified ways of graph manipulation.
- New methods community detection.
- New layouts for graph visualization.
- New statistical methods: graphlets,
  embeddings, graph matching, cohesive blocks, etc.
- How to use igraph graphs with new
  visualization tools: DiagrammeR, D3, etc.
</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("Networks"); GoBack("233");</script></p></dd>
  <dt id="132" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-132" style="cursor: pointer;">While my base R gently weeps</a> <span style="font-weight: normal; font-style: italic;">(A. Jonathan R. Godfrey)</span></dt>
  <dd id="a-132" class="collapse"><p style="padding-top: 0.5em;">A. Jonathan R. Godfrey, Institute of Fundamental Sciences, Massey University, Palmerston North, New Zealand:</p><blockquote>Blind users want the same from base R as does any other user. More importantly though, we also want the same benefits that front-ends and integrated development environments offer our classmates and colleagues. My assessment of all of the excellent tools tested to date is that none will meet the needs of blind users in the short to medium term. The BrailleR package hopes to fill this gap.

While the BrailleR package's original intention was to provide text representations of graphics and some convenience functions for helping novice users get started, other (more practical) issues have been given attention over the last twelve months. The package is receiving much-needed time and energy since unleashing the benefits of Rmarkdown via the knitr package.

Increased interaction with blind users via workshops and an email list (called ``BlindRUG") have shown the difficulties novice blind users are facing when getting started. Recent developments have included: a simple text editor for processing Rmarkdown files; functions to help set up the user's R installation;   a method to view and edit datasets by linking to standard spreadsheet software; and, alternative ways of processing R scripts and Rmd documents. The talk will include practical demonstrations of these features.

</blockquote><p style="text-align: right;"><script type="text/javascript">sessionInfo("kaleidoscope4"); GoBack("132");</script></p></dd>
  <dt id="81" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-81" style="cursor: pointer; text-decoration: line-through; color: #ABABAB;">Word Alignment tools in R</a> <span style="font-weight: normal; font-style: italic; text-decoration: line-through; color: #ABABAB;">(Neda Daneshgar / Majid Sarmad)</span></dt>
  <dd id="a-81" class="collapse" style="color: #ABABAB;"><i>Withdrawn</i><p style="text-align: right;"><script type="text/javascript"> GoBack("81");</script></p></dd>
</dl>
      <script type="text/javascript">
      $(document).ready(function() {
        var anchor = window.location.hash;
        var anchor_collapse = '#a-' + anchor.replace('#', '');
        $(anchor_collapse).collapse('toggle');
      });
      </script>



