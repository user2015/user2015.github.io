<script type="text/javascript">
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
</script>

<h1>Lightning Talks</h1>

<h2>Prepare your talk</h2>
<p>
Before useR! 2011, Di Cook and Rob Hyndman wrote two excelllent short communications about giving presentations at useR! conferences.
These were published in the R Journal (Volume 3/1, June 2011). The tips and suggestions are still valid and a good reminder:
<a href="http://journal.r-project.org/archive/2011-1/RJournal_2011-1_Hyndman.pdf" target="_blank">Giving a useR! Talk (Rob J. Hyndman)</a>
<a href="http://journal.r-project.org/archive/2011-1/RJournal_2011-1_Cook.pdf" target="_blank">Tips for Presenting Your Work (Dianne Cook)</a>
</p>

<i><b>Technical details:</b></i><br>
Presenters of <b>Lightning talks</b> have <b>5 minutes</b> at their disposal to present <b>15 slides</b> (<i>exactly 20 seconds per
slide</i>).</p>
<p>
We will ask you to prepare/compile your slides as a pdf-file. This file should be send to the organisers prior to the conference
(<a href="mailto:user2015@math.aau.dk">user2015@math.aau.dk</a>).
The <b>deadline</b> for submitting your lightning talk (pdf-file) is <b>Tuesday 30th of June, 12:00 (CET)</b>. 
The projector's aspect ratio is 4:3 (1024 x 768).
</p>



<h2>List of titles</h2>
<p>Lists of confirmed speakers sorted by presentation title. Click for: <a href="./contributed_talks">Contributed Talks</a>.</p>

<p>For abstracts click on the title (<a id="collapse-init" style="cursor: pointer;">Expand all abstracts</a>)</p>
<dl>
  <dt id="180" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-180" style="cursor: pointer;">An implementation  of the SAEM algorithm for left-censored data</a> <span style="font-weight: normal; font-style: italic;">(Raphaël Coudret) [<a href="./presentations/lightningtalk-coudret.pdf">slides</a>]</span></dt>
  <dd id="a-180" class="collapse"><p style="padding-top: 0.5em;">Raphaël Coudret, Open Analytics NV, Antwerp, Belgium:</p><blockquote>When studying a model with unknown real variables, the maximum likelihood estimator is very popular. For some models, it is not possible to have the expression of the likelihood. To tackle this issue, the EM algorithm was introduced. This iterative algorithm relies on the expectation of another likelihood, given some hidden random variables, but this expectation can also be impossible to find. 

The SAEM algorithm is an improvement of the EM algorithm. It estimates the desired expectation and produces a sequence of estimates of the unknown real variables. If we could compute the likelihood function for each element of this sequence, it would converge toward a local maximum of this likelihood function. See Delyon, Lavielle and Moulines (1999, Theorem 7).

We provide an R package containing an implementation of the SAEM algorithm for models with left-censored observations. This kind of models is commonly considered in pharmaceutical companies to handle inaccurate measures when the studied quantities are too small.

The SAEM algorithm also works for some models with a known likelihood function. That is why our package includes dynamic outputs to observe the convergence of interest. They can be used to check the implementation and to choose optimal parameters.</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="123" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-123" style="cursor: pointer;">Crowdsourced Data Processing with MTurkR</a> <span style="font-weight: normal; font-style: italic;">(Thomas J. Leeper) [<a href="./presentations/lightningtalk-leeper.pdf">slides</a>]</span></dt>
  <dd id="a-123" class="collapse"><p style="padding-top: 0.5em;">Thomas J. Leeper, Department of Political Science, Aarhus University, Aarhus, Denmark:</p><blockquote>This talk will introduce the use of the Amazon Mechanical Turk (MTurk) crowdsourcing platform as a resource for R users, focusing on ways that MTurk can help deal with messy data problems. The talk will introduce the MTurkR package &lt;http://cran.r-project.org/web/packages/MTurkR/index.html&gt;, which connects useRs to the human intelligence provided by MTurk crowd workers who can code data, images, and text, transcribe audio, video, or other machine-unreadable data, and thereby expand the capabilities of R beyond machine computation alone. The talk will focus on concrete applications and point the audience to further resources for creating and managing complex crowdsourcing tasks through R.</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="222" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-222" style="cursor: pointer;">Development and validation of statistical models for  occupancy detection in an office building</a> <span style="font-weight: normal; font-style: italic;">(Luis Miguel Candanedo Ibarra) [<a href="./presentations/lightningtalk-candanedo.pdf">slides</a>]</span></dt>
  <dd id="a-222" class="collapse"><p style="padding-top: 0.5em;">Luis Miguel Candanedo Ibarra, Faculté Polytechnique, Service de Thermique et Combustion, Université de Mons, Belgium:</p><blockquote>Real time building occupancy detection can be used to minimize the energy consumption in buildings by controlling the heating, cooling and lighting systems. In this work, experimental data from temperature, humidity, CO2 and light sensors have been used together with a digital camera to determine the truth occupancy status of an office room. The recorded labeled data is fed to supervised statistical learning models for classification. For this task, the open source tool R was used for data processing and model training. The results show very encouraging results. High accuracies were found in the data testing sets using random forest models and linear discriminant analysis. Also different feature combinations are compared. This is interesting since different combination of sensors exits in buildings. This work is part of the NEED4B consortium activities and has been co-financed by the European Commission through the Seventh Framework program.
</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="235" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-235" style="cursor: pointer;">Drat: Package Repositories Made Easy</a> <span style="font-weight: normal; font-style: italic;">(Dirk Eddelbuettel) [<a href="./presentations/lightningtalk-eddelbuettel.pdf">slides</a>]</span></dt>
  <dd id="a-235" class="collapse"><p style="padding-top: 0.5em;">Dirk Eddelbuettel, Debian and R Projects:</p><blockquote>The R package ecosystem is one of the cornerstones of the success seen by R. Support for multiple repositories is built into R, but (beyond BioConductor) not widely used.  

The drat package allows easy creation of repositories for package authors, and equally easy deployment of repositories by package users.  In particular, GitHub can be used as its "built-in" optional web presence for a (git) repository is ideally suited for hosting an R package repository (requiring only a webserver).  

We illustrate several test cases:  newer packages under development, packages not matching other repository requirements and of course local repositories accessibly only with a research group or department.
</blockquote><div style="height: 0.5em;"></div></dd>
  
<!-- Michael Bane -->

  <dt id="10" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-10" style="cursor: pointer;">Interrogating Six Large Gene Expression Datasets of Normal Human Brains with RUVcorr/R-Shiny</a> <span style="font-weight: normal; font-style: italic;">(Saskia Freytag) [<a href="./presentations/lightningtalk-freytag.pdf">slides</a>]</span></dt>
  <dd id="a-10" class="collapse"><p style="padding-top: 0.5em;">Saskia Freytag, Walter+Eliza Hall Institute:</p><blockquote>Publicly available resources on gene expression in normal human brains can be used to identify gene networks that pertain to diseases of interest and can identify genes that are likely to be involved in the causal mechanism. However, clinicians and biologists are often intimidated by the bioinformatics and R-programming knowledge required to analyze these large datasets. For these reasons we created an interactive R-shiny tool that allows interrogation of six large gene expression studies of the developed and developing human brain. We ensured that datasets were comparable by standardizing gene nomenclature. Furthermore, the user’s research interest informs a data-driven cleaning procedure, removal of unwanted variation, shown to lead to greater consistency across different studies. Our tool currently uses the cleaned datasets to visualize networks of genes that the user is interested in and compares these across studies. Additionally, it can be used to rank candidate genes according to their likelihood of involvement in the disease of interest. Future work will expand this tool to include more sophisticated analysis methods such as spatio-temporal network analyses as well as incorporating other omics datasets on the human brain.  </blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="9" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-9" style="cursor: pointer;">Introducing R as first programming</a> <span style="font-weight: normal; font-style: italic;">(Soma Datta) [<a href="./presentations/lightningtalk-datta.pdf">slides</a>]</span></dt>
  <dd id="a-9" class="collapse"><p style="padding-top: 0.5em;">Soma Datta, Northeastern State University Department of mathematics and Computer Science:</p><blockquote>The use of computers has become an integral part of everyone’s life.  Some high schools have introduced programming as a part of their curriculum. Programming languages that are taught in high schools are typically C++, Java, etc. These languages have their own advantages but have relatively intricate syntax, causing resistance toward programming. This paper proposes that an introduction to ‘R’ from the middle school level would enhance the development of analytical and logical thinking.  Students would also develop an interest in Science, Technology, Engineering, & Mathematics (STEM).  This paper presents how R can help middle and high school students’ analytical development, logical thinking, and develop a love for coding. The hypothesis of this pedagogy is programming can be for all ages and be learnt by themselves with minimal given tools.  To prove the hypothesis, this approach will be implemented by introducing R from middle school to college freshmen, with no prior programming knowledge. This study will be evaluated by teaching R and Visual Basic to different groups of students. The methodology to be used will be a modification of the Self Organization Learning Environment (SOLE) concept.

</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="27" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-27" style="cursor: pointer;">Lotka's Law Package </a> <span style="font-weight: normal; font-style: italic;">(Alon Friedman) [<a href="./presentations/lightningtalk-friedman.pdf">slides</a>]</span></dt>
  <dd id="a-27" class="collapse"><p style="padding-top: 0.5em;">Alon Friedman, School of information, University of south Florida, Tampa, USA:</p><blockquote>Research suggests that in order to identify a scientific domain, we need to follow the activities of that domain’s researchers. The field of informatics addresses the science of processing data for storage using a strong relationship with mathematics to examine any domain. We set out to find whether R can support the examination of common models of informatics by measuring scholarly activities in a particular domain. Researchers have found that the most common laws relied upon by informatics researchers are Bradford’s Law, Zipf’s Law, and Lotka’s Law. Bradford’s Law examines journal productivity, Zipf’s law measures word frequency and Lotka’s Law investigates author productivity. Researchers have implemented Bradford’s Law and Zipf’s law using R to advance their studies. However, we found that Lotka’s Law has not been examined or used under R. In order to address this gap, we developed a Lotka’s Law package in R. We found that the advantage of using R in analyzing Lotka’s Law is the ability to reexamine Pao’s testing procedure. We will present our development of a Lotka’s Law package in R and demonstrate how to visualize the results.</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="163" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-163" style="cursor: pointer;">Precipitation extreme value statistics application</a> <span style="font-weight: normal; font-style: italic;">(Berry Boessenkool) [<a href="./presentations/lightningtalk-boessenkool.pdf">slides</a>]</span></dt>
  <dd id="a-163" class="collapse"><p style="padding-top: 0.5em;">Berry Boessenkool, Institute of Earth and Environmental Science, Potsdam University, Germany:</p><blockquote>Precipitation intensity quantiles (P) usually rise exponentially with air temperature (T). This follows the Clausius-Clapeyron relationship for potential air moisture content.  Above a certain temperature however, the P-T-relationship is reversed. This drop could be dictated by meteorological properties like limited moisture availability.
It could also originate from the fact that the number of observations at high temperatures is small. Possible extreme rainfall intensities may simply not yet be recorded, as high quantiles rise with sample size towards an asymptotic convergence with the theoretical value. 

Using R and the package lmomco, we fitted 17 distributions to the precipitation intensity dataset. With the distribution functions closest to the observed data defined as "real distributions" and synthetic random samples of different sizes, simulations confirm our hypothesis that the quantile drop is a statistical artefact.
If appropriate distributions are fitted to the samples, their quantiles serve as a non-biased estimator even in small samples. These parametric quantiles show an unabated increase in precipitation intensity with temperature, which is important for flood risk calculation.

Within our research, I created an R package on github, wrote my Master's thesis and am about to present at the EGU general assembly.</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="127" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-127" style="cursor: pointer;">Predicting the NCAA Basketball Tournament for Fun and Profit</a> <span style="font-weight: normal; font-style: italic;">(Jonathan Arfa) [<a href="./presentations/lightningtalk-arfa.pdf">slides</a>]</span></dt>
  <dd id="a-127" class="collapse"><p style="padding-top: 0.5em;">Jonathan Arfa, Magnetic:</p><blockquote>This talk is aimed at intermediate (or even novice) R users, and would be ideal for either a 5 minute lightning talk or a poster session. 

We will walk through our experience using R to build datasets and models as part of Kaggle’s “March Machine Learning Mania 2015” competition, where the task was to accurately predict the outcomes of games in the 2015 NCAA (a university-level athletic association in the USA) basketball tournament. We will go into detail regarding data manipulation, modeling decisions (specifically how the competition’s scoring rules informed our choice of model), pitfalls we encountered with bad data and results that were “too good to be true”, and what changes we would make for next year’s competition.

Our model ended up in the top 25% of competitors after all 63 games were played. With so few games there is of course a lot of randomness in the final ranking, but as people who didn’t know much about basketball before this tournament we consider this to be a very good outcome.
</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="247" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-247" style="cursor: pointer;">R: fast and big strategies.</a> <span style="font-weight: normal; font-style: italic;">(Adolfo Alvarez) [<a href="./presentations/lightningtalk-alvarez.pdf">slides</a>]</span></dt>
  <dd id="a-247" class="collapse"><p style="padding-top: 0.5em;">Adolfo Alvarez, Analyx, Poznan, Poland.:</p><blockquote>This lightning talk will provide a really fast review of several techniques we can use to deal with long execution times and/or big data. From efficient code tips to the use of big analytics packages in just five minutes.</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="114" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-114" style="cursor: pointer;">Regression Spline Mixed Models for Analyzing EEG Data and Event-Related Potentials</a> <span style="font-weight: normal; font-style: italic;">(Karen Nielsen) [<a href="./presentations/lightningtalk-nielsen.pdf">slides</a>]</span></dt>
  <dd id="a-114" class="collapse"><p style="padding-top: 0.5em;">Karen Nielsen, Department of Statistics, University of Michigan, Ann Arbor, USA:</p><blockquote>Analysis of EEG data tends to be a nuanced, subjective process. For example, filtering is common, primarily to reduce noise, but a wide variety of filters are available with only heuristic (not theoretical) recommendations for use. 

This work focuses on Event-Related Potentials (ERP), which generally involve waveforms with only one or a few oscillations. Since EEG readings consist of highly-correlated multi-channel readings, an ideal modeling approach should make use of this structure. Here, we will show how Regression Spline Mixed Models (RSMM) can combine the features of splines with a hierarchical framework to explore EEG data at any of the many levels that are collected and of interest to researchers. 

While there are established protocols for working with EEG and ERP data in other software, R packages for this kind of data are more novel. This creates an opportunity to have innovative new approaches to working with neuronal waveform data included in the development of these packages, thus enabling use of these methods by non-statisticians. Here, we outline how existing functions in R can be combined to achieve a general approach to ERP data.</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="156" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-156" style="cursor: pointer;">rstats4ag.org, A website to help crop and weed scientists</a> <span style="font-weight: normal; font-style: italic;">(Jens Carl Streibig) [<a href="./presentations/lightningtalk-streibig.pdf">slides</a>]</span></dt>
  <dd id="a-156" class="collapse"><p style="padding-top: 0.5em;">Jens Carl Streibig, Plant and Environmental Sciences, University of Copenhagen, Denmark:</p><blockquote>Being an open source, R is a programme and environment that has evolved over time. It can be accessed anywhere, also in developing countries with few resources for purchasing commercial programmes (e.g SAS, SPSS, Matlab). The dynamic of R makes the internet perfect for updating information of R functionality and R add-on packages and teaching R without costs. The purpose of the site, http://rstats4ag.org/, is simply to provide information and examples on how to use R to analyse statistical designs that are commonly used in crop and weed science experiments. The website is not meant to be a complete reference for all the capabilities of R, nor should it be used as a substitute for consulting well-trained statisticians. A majority of agricultural research uses a small subset of experimental designs, and thus, there is a high probability that the examples presented will provide a framework for analysis of many experiments. The codes for analysing common models, be it ANOVA, ANCOVA, linear or nonlinear regressions, and mixed models, will hopefully be useful to students and practitioners and will strengthen the statistics in the agricultural industries.</blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="4" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-4" style="cursor: pointer;">Teaching R graphics and visualization rhetoric</a> <span style="font-weight: normal; font-style: italic;">(Richard Layton) [<a href="./presentations/lightningtalk-layton.pdf">slides</a>]</span></dt>
  <dd id="a-4" class="collapse"><p style="padding-top: 0.5em;">Richard Layton, Mechanical Engineering, Rose-Hulman Institute of Technology, Terre Haute, IN, USA:</p><blockquote>Approaches to teaching data visualization exist on a spectrum. At one end, learning objectives focus on R programming with little or no emphasis on rhetoric. At the other end, the focus is on visualization rhetoric or graphic design with little or no emphasis on software. Where a particular instructor stands on this spectrum tends to correlate with their program type. For example, statistics and computer science programs tend to focus on programming and statistical analysis, journalism and technical communication programs tend to focus on rhetoric, and business and engineering programs lie somewhere between. 


I argue that being &quot;somewhere between&quot; is important for all students of data visualization. Data graphics are fundamentally about communication. R programming teaches &quot;how&quot;; visual rhetoric teaches &quot;why&quot;. Both are needed at more than superficial levels if we are to fully prepare our students for the professions. In this talk, I describe the learning objectives and student activities in my data visualization course designed for the middle of the spectrum, with significant emphasis given to both why and how data visuals are created.  


My goals are to prompt a discussion with other teachers and promote course design with significant emphasis on both R graphics and visualization rhetoric. </blockquote><div style="height: 0.5em;"></div></dd>
  <dt id="166" style="padding-left: 2em; text-indent: -2em;"><a data-toggle="collapse" data-target="#a-166" style="cursor: pointer;">Zombie Preparedness</a> <span style="font-weight: normal; font-style: italic;">(Michael Höhle) [<a href="./presentations/lightningtalk-hoehle.pdf">slides</a>]</span></dt>
  <dd id="a-166" class="collapse"><p style="padding-top: 0.5em;">Michael Höhle, Department of Mathematics, Stockholm University, Sweden:</p><blockquote>It is just another day at the office, when suddenly the monitoring system signals a strange incoming aberration of zombie bites...
This completely hypothetical use-case, extending the 'Preparedness 101' campaign by the Centers for Disease Control and Prevention (CDC) to a statistical setting, is about how the R package 'surveillance'. The package provides a statistical toolkit to detect, track and analyse outbreaks before, while and after they occur. Applied infectious disease epidemiology in the form of delay adjusted surveillance algorithms, nowcasting and back-projections is illustrated using a blitz of imaginary surveillance data, visualizations and models. At the end of this horror talk, you might find yourself better prepared for zombie suRvival.</blockquote><div style="height: 0.5em;"></div></dd>
</dl>
      <script type="text/javascript">
      $(document).ready(function() {
        var anchor = window.location.hash;
        var anchor_collapse = '#a-' + anchor.replace('#', '');
        $(anchor_collapse).collapse('toggle');
      });
      </script>
