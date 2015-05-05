<h1>Tutorials</h1>
<p>   The
      following 16 tutorials will be offered free of charge to
      the useR! 2015 participants on Tutorial Tuesday,
      June 30. The duration of each tutorial will be 3
      hours.  There will 8 tutorials in the morning session
      and 8 in the afternoon session.
</p>


<h2>List of tutorials</h2>
	
<p>For elaborate descriptions of the tutorials please
	click on the tutorial titles.</p>

<ul>
  <li><a href="#tessera">Analysis and Visualization of Large Complex Data with Tessera (<i>Ryan Hafen and Stephen Elston</i>)</a></li>
  <li><a href="#mlr">Applied Machine Learning and Efficient Model Selection with <tt>mlr</tt> (<i>Bernd Bischl and Michel Lang</i>)</a></li>
  <li><a href="#appliedspatial">Applied Spatial Data Analysis with R (<i>Virgilio G&oacute;mez Rubio</i>)</a></li>
  <li><a href="#BN">Bayesian Networks and Graphical Models with R (<i>S&oslash;ren H&oslash;jsgaard and Therese Graversen</i>)</a></li>
  <li><a href="#bioconductor">Bioconductor for high-throughput sequence analysis (<i>Martin Morgan</i>)</a></li>
  <li><a href="#dplyr">Data manipulation with <tt>dplyr</tt> (<i>Hadley Wickham</i>)</a></li>
  <li><a href="#baker">Efficient statistical consulting using R Workflow for data analysis projects (<i>Peter Baker</i>)</a></li>
  <li><a href="#grid">Getting to Know Grid Graphics (<i>Paul Murrell</i>)</a></li>
  <li><a href="#missing">Handling missing values with a special focus on the use of principal components methods (<i>Julie Josse and Fran&ccedil;ois Husson</i>)</a></li>
  <li><a href="#bayes">Introduction to Bayesian Data Analysis with R (<i>Rasmus B&aring;&aring;th</i>)</a></li>
  <li><a href="#RHadoop">RHadoop (<i>Andrie de Vries and Simon Field</i>)</a></li>
  <li><a href="#rocker">Rocker: Using R on Docker (<i>Dirk Eddelbuettel</i>)</a></li>
  <li><a href="#spatstat"><tt>spatstat</tt>: An R package for analysing spatial point patterns (<i>Adrian Baddeley and Ege Rubak</i>)</a></li>
  <li><a href="#network">Statistical analysis of network data (<i>Gabor Csardi</i>)</a></li>
  <li><a href="#test">Testing R Code (<i>Richard J. Cotton</i>)</a></li>
  <li><a href="#pandoc">Using Pandoc's markdown with R (<i>Gergely Dar&oacute;czi</i>)</a></li>
</ul>


<div id="tessera">
  <h3>Analysis and Visualization of Large Complex Data with Tessera (<i>Ryan Hafen and Stephen Elston</i>)</h3>
  <p>Tessera is an open source statistical computing
	      environment that enables R users to perform deep
	      analysis of large, complex data sets.  Analysis
	      can be carried out completely from within the R
	      environment, making use of all of the thousands
	      of methods available in R.  Tessera uses the
	      Divide and Recombine (D&R) approach. In D&R,
	      data are divided into meaningful subsets,
	      embarrassingly parallel computations are
	      performed on the subsets, and results are
	      combined in a statistically valid manner.  Using
	      the R datadr package, Tessera provides a simple
	      interface to distributed parallel back end
	      computation environments such as Hadoop or
	      Spark.  Tessera includes a visualization
	      component, Trelliscope, which provides a D&R
	      approach for detailed, flexible, and interactive
	      visualization of large complex data. More
	      details are available at <a href="http://tessera.io" target="_blank">http://tessera.io</a>.</p>
	  <p>    
	      In this tutorial, R users will gain hands-on
	      experience analyzing and visualizing data with
	      Tessera. The interactive tutorial examples are
	      small enough to run on a modest shared cluster,
	      which will be provided. The techniques learned
	      can be quickly scaled up to a larger cluster for
	      larger data sets. Attendee-provided laptops with
	      a modern web browser installed will be required.
  
  </p>
</div>

<div id="mlr">
  <h3>Applied Machine Learning and Efficient Model Selection with <tt>mlr</tt>
		  (<i>Bernd Bischl and Michel Lang</i>)</h3>
<p>The course will enable the participants to
		  understand and practically apply the most
		  important building blocks of machine
		  learning experiments with the <tt>mlr</tt> package in
		  supervised and unsupervised machine
		  learning, i.e. classification, regression,
		  survival analysis and clustering.</p>

		<p>The <tt>mlr</tt> package allows data
		  analysts who are neither experts in machine
		  learning nor seasoned R programmers to
		  specify complex machine learning experiments
		  in short, succinct and scalable code.
		  Experienced programmers, on the other hand,
		  get to wield a large, well-designed toolbox,
		  which they can easily customize and extend
		  to their needs.</p>

		<p>The participants will learn how to perform
		  basic <tt>mlr</tt> operations like data
		  import, data preprocessing, model building,
		  performance evaluation and resampling.
		  Using these basic building blocks, we will
		  focus on more advanced topics like
		  benchmarking, model selection and
		  hyperparameter tuning. We will also
		  demonstrate how to easily parallelize the
		  most time-consuming operations in common
		  parallel environments.</p>

		<p>The course will end with a short
		demonstration on how to access the new OpenML
		server for open machine learning
		(<a href="http://www.openml.org" target="_blank">http://www.openml.org</a>) which provides a large
		repository of benchmark data sets and enables
		reproducible experiments and meta analysis.</p>

		<p>Link for further details can be found on the useR2015 wiki page:
		  <a href="https://github.com/berndbischl/mlr/wiki/useR-2015-tutorial" target="_blank">https://github.com/berndbischl/mlr/wiki/useR-2015-tutorial</a></p>
</div>

<div id="appliedspatial">
  <h3>Applied Spatial Data Analysis with R (<i>Virgilio G&oacute;mez Rubio</i>)</h3>
  <p>
		  This tutorial is aimed at researchers which
		  have to deal with the analysis of spatial
		  data. The tutorial will tackle the problem
		  of analysing spatial data with the R
		  programming language. Different types of
		  spatial data will be covered, such as point
		  patterns, lattice data and data coming from
		  irregular measurements of continuous
		  processes (geostatistics). In addition,
		  different worked examples will be presented
		  showing how to proceed with the analysis of
		  a wide range of spatial data sets.
		</p>
		<p>The topics of the course will contain an
		  introduction to various R packages for the
		  analysis of spatial data.  This includes
		  data import/export, data management and
		  visualisation, and how to fit a broad range
		  of models for spatial data. The worked
		  examples will focus on particular real data
		  sets from Epidemiology, Environmental
		  Sciences, Ecology, Economics and others.
		</p>
		<p>URL: <a href="http://www.uclm.es/profesorado/vgomez/useR2015" target="_blank">http://www.uclm.es/profesorado/vgomez/useR2015</a></p>
</div>

<div id="BN">
  <h3>Bayesian Networks and Graphical Models with R (<i>S&oslash;ren H&oslash;jsgaard and Therese Graversen</i>)</h3>
  <p>We introduce Bayesian Networks (BNs) and their implementation in the
	  gRain package. Topics will include probability propagation in BNs and
	  aspects of learning BNs from data.</p>
	<p>Examples from genetics will be used throughout for
	  illustrative purposes. Moreover, there will be a
	  running example about building a BN for a medical
	  diagnosis from real-world data.</p>
	<p>Attendees are assumed to have a working
	  understanding of log-linear models for contingency
	  tables. Relevant literature includes: Højsgaard,
	  S.; Edwards, D.; Lauritzen, S. (2012): Graphical
	  models with R, Springer</p>
</div>

<div id="bioconductor">
  <h3> Bioconductor for high-throughput sequence analysis (<i>Martin Morgan</i>)</h3>
  <p>
    DNA sequence analysis generates large volumes of
    data presenting challenging bioinformatic and
    statistical problems. This tutorial introduces
    established and new Bioconductor
    (<a href="http://bioconductor.org"
    target="_blank">http://bioconductor.org</a>) 
    packages and work flows
    for the analysis of sequence data. We learn about
    approaches for efficiently manipulating sequences
    and alignments, and introduce common work flows
    and the unique statistical challenges associated
    with 'RNAseq', variant annotation, and other
    experiments. The emphasis is on exploratory
    analysis, and the analysis of designed
    experiments. The workshop will touch on the
    Biostrings, ShortRead, GenomicRanges, DESeq2,
    VariantAnnotation, and other packages, with short
    exercises to illustrate the functionality of each
    package.  The goals of the workshop are to: (1)
    Gain overall familiarity with Bioconductor
    packages for high-throughput sequence analysis,
    including Bioconductor vignettes and classes; (2)
    Obtain experience running bioninformatic work
    flows for data quality assessment, RNA-seq
    differential expression, and manipulating variant
    call format files; (3) Appreciate the importance
    of ranges and range-based manipulation for modern
    genomic analysis; and (4) Learn 'best practices'
    for working with large data.  The workshop assumes
    an intermediate level of familiarity with R, and
    basic understanding of biological and
    technological aspects of high-throughput sequence
    analysis. Participants should come prepared with a
    modern wireless-enabled laptop and web browser
    installed. This workshop is for professional
    bioinformaticians and statisticians intending to
    use R / Bioconductor for analysis and
    comprehension of high-throughput sequence data.
  </p>
</div>

<div id="dplyr">
  <h3>Data manipulation with <tt>dplyr</tt> (<i>Hadley Wickham</i>)</h3>
  <p>
      Data manipulation is a key part of any data
	    analysis, crucial for interactive exploration and
	    as a precursor for visualisation and
	    modelling. The dplyr package makes it easy to
	    express the most common manipulation operations in
	    natural way, built around verbs like `filter()`,
	    `mutate()`, `group_by()` and `summarise()`. In
	    this tutorial, you'll learn dplyr in an
	    interactive setting, with plenty of hands-on
	    activities.
  </p>
</div>

<div id="baker">
  <h3>Efficient statistical consulting using R Workflow for data analysis projects (<i>Peter Baker</i>)</h3>
    <p>Many researchers and statistical consultants are
	    drowning in data. This tutorial provides a
	    hands-on introduction to strategies for the
	    workflow of research data management and data
	    analysis. While loosely based on the manual
	    approaches of Long (2009) "The Workflow of Data
	    Analysis Using STATA", a more automated strategy
	    will be outlined. One approach is to
	    systematically employ computing tools like 'R',
	    'git' and 'make' to assist in this process. These
	    tools will be incorporated into the practical
		  exercises.</p>
		<p>R is ideal for automating repetitive tasks since,
	    in addition to thousands of built-in functions, it
	    is easy to write your own. Such functions can be
	    used for diverse tasks such as setting up project
	    directories and R syntax files, checking data
	    against code books, repeating custom analyses and
	    extracting results for reproducible reporting to
	    HTML, Word or pdf formats. 'make' keeps track of
	    the dependencies in the process and allows the
	    workflow to be broken down into smaller chunks
	    like reading data, checking, analysing and
	    reporting. Only the updated steps in this workflow
	    are re-run. Finally, git safely allows analysts to
	    try new ideas but revert to previous versions of R
	    scripts or reports without needing multiple
	    versions.</p>
</div>

<div id="grid">
  <h3>Getting to Know Grid Graphics (<i>Paul Murrell</i>)</h3>
    <p>The 'grid' graphics package provides a low-level
	    graphics system for R.  Many R users do not have
	    direct contact with 'grid', but they regularly
	    make indirect use of 'grid' whenever they draw a
	    'lattice' or 'ggplot2' plot.</p>
		<p>This tutorial will expose the 'grid' graphics
	    system that is lurking behind higher-level
	    packages, like 'lattice' and 'ggplot2', and
	    explore the tools that 'grid' provides to modify,
	    customise, reuse, and augment those higher-level
	    plots.  We will learn about the fundamental
	    concepts in 'grid' graphics---grobs, units, and
	    viewports---and we will learn functions to
	    explore, access, and manipulate grobs and
	    viewports.</p>
</div>

<div id="missing">
  <h3>Handling missing values with a special focus on the use of principal components methods (<i>Julie Josse and Fran&ccedil;ois Husson</i>)</h3>
    <p>Handling missing values is certainly the most
	    thankless task for a practitioner in statistics
	    but unfortunately it is a very common task.</p>
	  <p>This tutorial describes and compares several
	    methods to handle missing values in data sets with
	    continuous, categorical or mixed
	    variables. Principal component methods as well as
	    random forests or methods based on joint or
	    conditional modelling will be used first to
	    perform single imputation, but also to perform
	    multiple imputation to take into account the
		  variability that exists on each imputed value.</p>
	  <p>The different methods will be illustrated with
	    numerous examples from different fields such as
	    genomics (human tumor data), sensometrics (wine
	    data) and survey (questionnaire data) and we will
	    use the R packages Amelia, MICE and missMDA.</p>
</div>

<div id="bayes">
  <h3>Introduction to Bayesian Data Analysis with R (<i>Rasmus B&aring;&aring;th</i>)</h3>
<p>Bayesian data analysis is a powerful technique for
	    model inference and prediction, and R is the tool
	    that makes this easy. This tutorial is a general
	    introduction to Bayesian data analysis using R. It
	    will cover the basics of Bayesian modeling, both
	    the theory underpinning it and the practicalities
	    of doing it in R. The target audience is useRs
	    with little or no knowledge of Bayesian data
	    analysis. After the tutorial you should be able to
	    run simple Bayesian analyzes in R.</p>
		<p>The tutorial is divided into two parts where each
	    part consists of a presentation followed by a
	    hands-on exercise session. Part 1 will introduce
	    Bayesian modeling from a simulation based
	    perspective and describe the what? why? and how?
	    of Bayesian data analysis. Part 2 will focus on R
	    packages that facilitates specifying and fitting
	    Bayesian models. The tutorial is very much
	    introductory in that no prior knowledge of
	    Bayesian data analysis, or even likelihood based
	    statistics, is assumed. For the hands-on exercises
	    it will be necessary for you to know your way
	    around R and to be comfortable manipulating
	    vectors and data frames.</p>
</div>

<div id="Rhadoop">
  <h3>RHadoop (<i>Andrie de Vries and Simon Field</i>)</h3>
  <p>
      Using Hadoop for big data is a much-hyped
	    technology. Originally developed by companies with
	    web-scale data, Hadoop is increasingly being
	    evaluated by IT departments in many other
	    industries.  The R data scientist must know how to
	    modify algorithms to use of the Hadoop map-reduce
	    paradigm. Fortunately, R has many features of
	    functional languages, for example lapply() which
	    is a simple example of the philosophy of
	    map-reduce. This makes it comparatively easy for
	    an R user to understand the map-reduce idea. The
	    RHadoop project is an abstraction layer around the
	    Hadoop map-reduce paradigm and HDFS file system,
	    meaning you can focus on writing R code, rather
	    than learning Java.  This tutorial introduces
	    RHadoop to data scientists new to Hadoop. We do a
	    gentle introduction of terminology, develop the
	    prototypical word count example, and then
	    illustrate distributed computing concepts such as
	    k-means clustering and linear regression on
	    distributed data.  Prior to the event, we will
	    publish a virtual machine containing the
	    Hortonworks Hadoop distribution, complete with R,
	    the RHadoop packages and an RStudio IDE. This
	    makes it easy for students to get set up and
	    practise. We also plan to provision a Microsoft
	    Azure Hadoop cluster to use on the day.
  </p>
</div>

<div id="rocker">
  <h3>Rocker: Using R on Docker (<i>Dirk Eddelbuettel</i>)</h3>
    <p>Docker is emerging as a key technology which
	    provides containers: easily deployable
	    environments which are standardized, easy to share
	    and reuse, highly portable while being light on
	    resource usage. Docker is ideal for building,
	    testing and deploying code---as well as for
	    providing reproducible environments. Docker also
	    provides hub.docker.com, a container hosting and
	    build service interfacing Github.</p>
		<p>The Rocker project provides the default R image
	    for Docker as well as a number of containers
	    extending it: use of R-devel, an RStudio instance,
	    a container full of Hadleyverse packages and more.</p>
		<p>The tutorial introduces basic interactive Docker
	    use via the popular RStudio Server container,
	    along with an introduction to committing, pushing
	    and pulling containers. A focus on command-line
	    mode examines Docker use in more detail, including
	    how to share files between the host machine and
	    the Docker instance. Finally, writing and
	    modifying Dockerfiles for both local use and
	    Docker Hub uploads will be discussed based on
	    several examples from the more advanced Rocker
	    containers.</p>
		<p>
	    More information is available at the
	    <a href="https://github.com/rocker-org/rocker/wiki">Rocker
	    wiki</a></p>
</div>

<div id="spatstat">
  <h3><tt>spatstat</tt>: An R package for analysing spatial point patterns (<i>Adrian Baddeley and Ege Rubak</i>)</h3>
  <p>
      This tutorial will enable participants to analyse
	    spatial point pattern data using the contributed
	    package spatstat. We introduce basic principles,
	    provide an overview of the package, and go through
	    the steps of a complete statistical analysis of
	    point pattern data. Steps include: calculating and
	    plotting exploratory summaries; fitting Poisson,
	    Cox, and Gibbs point process models; validating
	    and critiquing fitted models.  Basic familiarity
	    with R and elementary statistical concepts is
	    required, but no prior knowledge of spatial point
	    pattern analysis is assumed, so the tutorial is
	    well suited for newcomers to the field of spatial
	    statistics.  The package has grown a lot over the
	    last few years, so current spatstat users wanting
	    a brush-up are also encouraged to participate.
  </p>
</div>

<div id="network">
  <h3>Statistical analysis of network data (<i>Gabor Csardi</i>)</h3>
<p>Analysis of networks is a popular area, because of
	    the abundance of network data, and recent
	    methodological developments. We will cover 280
	    years of networks, from Euler to Graphons, through
	    a number of mathematical, algorithmic and
	    statistical methods.</p>

		Topics:
	    <ul>
	    <li>Why networks are interesting and important.</li>
	    <li>Manipulating them, conversions between formats.</li>
	    <li>Paths, searches, flows, cuts and cohesive groups.</li>
	    <li>Centrality, from classic to spectral measures.</li>
	    <li>Visualization, with various packages (e.g. DiagrammeR) and external tools.
	      Visualization of large graphs using community detection.</li>
	    <li>Finding groups in networks, community detection.</li>
	    <li>Random graphs and their use. Classic models, stochastic block models, mixed
	      membership stochastic block models.</li>
	    <li>Statistical methods: embeddings, graphlets, graphons.</li>
	    <li>Temporal networks and change-point detection.</li>
	    </ul>

		<p>For most of the tutorial we will use the igraph R package. Example
	    code and data sets will be available to participants.</p>

		<p>Target audience: statisticians and data scientists
	    unsure what to do with their network data, or how
	    to do it with R. Anyone wanting to get a quick
	    taste of current network methods and tools.</p>

		<p>Background knowledge required: basic R skills, at the level of any
	    decent introductory R textbook. All network concepts will be
	    explained.</p>
</div>

<div id="test">
  <h3>Testing R Code (<i>Richard J. Cotton</i>)</h3> 
      The tutorial aims to educate participants in three things:
	    <ol>
	      <li>How to write R code that is easy to test and maintain.</li>
	      <li>How to perform run-time testing using the assertive package.</li>
	      <li>How to perform development-time testing using the testthat package.</li>
	    </ol>

	    Topics include:
	    <ul>
	      <li>understanding software development principles like "Don't Repeat Yourself" and "Fail Early, Fail Often".</li>
	      <li>writing good warnings and error messages</li>
	      <li>what an assertion is, and how and where to write one</li>
	      <li>as above, but for unit tests</li>
	      <li>packaging tests</li>
	    </ul>

	    <p>
	    Basic R skills are needed: you need experience in
	    writing your own functions.  The unit testing
	    section is mostly applicable to package
	    developers, but no experience in this is assumed.
	    There will be lots of practical examples.
    </p>
</div>

<div id="pandoc">
  <h3>Using Pandoc's markdown with R (<i>Gergely Dar&oacute;czi</i>)</h3>
  <p>
      Markdown is getting more and more popular among R users, especially in
	    literate programming and report generation. This tutorial will start
	    with a quick introduction on formatting text with markdown syntax
	    outside of R, then I will concentrate on how to create textual reports
	    with e.g. kintr, Sweave or brew. After these warm-up exercises, we can
	    start producing complex markdown documents inside of R, then transform
	    those to various file formats, such as PDF, HTML, odt or docx. No
	    previous knitr or markdown knowledge is required to attend.
  </p>
</div>



