<h1>Invited Talks</h1>
<p>
	We are excited to announce the invited speakers useR! 2015 in
	Aalborg! The line-up consists of <a href="https://www.stat.auckland.ac.nz/showperson?firstname=Thomas&surname=Lumley">Thomas
	Lumley</a>
	(<a href="http://www.r-project.org/contributors.html">R
	Core</a>, <a href="http://cran.r-project.org/web/packages/survey/index.html">Survey</a>),
	<a href="http://school.maths.uwa.edu.au/~adrian">Adrian Baddeley</a>
	(<a href="http://cran.r-project.org/web/packages/spatstat/index.html">Spatstat</a>),
	<a href="http://www.stats.ox.ac.uk/~steffen/">Steffen Lauritzen</a> (gRaphical models), 
	<a href="http://dicook.public.iastate.edu/">Di Cook</a> (GGobi),
	<a href="http://blog.r-enthusiasts.com/">Romain Fran&ccedil;ois</a>
	(<a href="http://cran.r-project.org/web/packages/Rcpp/index.html">R/C++</a>)
	and <a href="http://statweb.stanford.edu/~susan/">Susan
	Holmes</a> (<a href="http://joey711.github.io/phyloseq/">phyloseq</a>).
	</p>

<p>		
	<a href="https://www.stat.auckland.ac.nz/showperson?firstname=Thomas&surname=Lumley">
	  <img src="img/invited_talks/thomaslumley.jpg" alt="Thomas Lumley" style="height:140px;"></a>
	<a href="http://school.maths.uwa.edu.au/~adrian">
	  <img src="img/invited_talks/adrian.jpg" alt="Adrian Baddeley" style="height:140px;"></a>
	<a href="http://www.stats.ox.ac.uk/~steffen/">
	  <img src="img/invited_talks/steffen.jpg" alt="Steffen Lauritzen" style="height:140px;"></a>
	<a href="http://dicook.public.iastate.edu/">
	  <img src="img/invited_talks/dicook.jpg" alt="Di Cook" style="height:140px;"></a>
	<a href="http://blog.r-enthusiasts.com/">
	  <img src="img/invited_talks/romain.jpg" alt="Romain Francois" style="height:140px;"></a>
	<a href="http://statweb.stanford.edu/~susan/">
	  <img src="img/invited_talks/susan.jpg" alt="Susan Holmes" style="height:140px;"></a>
</p>






<h2>Titles and abstracts</h2>
<p>Click on title for abstract.</p>
<ul>
  <li><a href="#lumley">Thomas Lumley: How flexible computing expands what an individual can do</a></li>
  <li><a href="#baddeley">Adrian Baddeley: How R has changed spatial statistics</a></li>
  <li><a href="#lauritzen">Steffen Lauritzen: Linear estimating equations for Gaussian graphical models with symmetry</a></li>
  <li><a href="#cook">Di Cook: A Survey of Two Decades of Efforts to Build Interactive Graphics Capacity in R</a></li>
  <li><a href="#francois">Romain Fran&ccedil;ois: My R adventures</a></li>
  <li><a href="#holmes">Susan Holmes: Multitype data integration : challenges from the Human Microbiome</a></li>
</ul>
  

<div id="lumley">
  <h3>Thomas Lumley: How flexible computing expands what an individual can do</h3>
  <p>
    Design-based inference in survey statistics
    involves reimplementing everything to allow for
    unequal sampling probabilities and correlation
    in sampling, for moderately large data
    sets. Since there is only one way sampling can
    be iid, but many ways it can be unequal and
    correlated, there is a risk of reimplementing
    everything many times. I will talk about how the
    survey software in R has taken advantage of
    advanced concepts such as column-store databases
    and sparse matrices, and simple concepts such as
    objects. The result is arguably more
    comprehensive than any other design-based
    inference system available, but from at least an
    order of magnitude less effort.
  </p>
</div>

<div id="baddeley">
  <h3>Adrian Baddeley: How R has changed spatial statistics</h3>
  <p>
    The growth of R has triggered a revolution in
    the science of analysing spatial data --
    especially its 'problem child', the analysis of
    spatial point patterns. I will sketch some of
    the revolutionary ideas (past, current and
    future) and demonstrate them using the
    contributed package 'spatstat', which played a
    prominent role in the transformation.
  </p>
</div>


<div id="lauritzen">
  <h3>Steffen Lauritzen: Linear estimating equations for Gaussian graphical models with symmetry</h3>
  <p>
    In models of high complexity, the computational
    burden involved in calculating the maximum
    likelihood estimator can be forbidding. Proper
    scoring rules such as the logarithmic score, the
    Brier score, and others, induce natural unbiased
    estimating equations that generally lead to
    consistent estimation of unknown parameters. The
    logarithmic score corresponds to maximum
    likelihood estimation whereas a score function
    introduced by Hyvärinen (2005) leads to linear
    estimation equations for exponential families,
    including Gaussian graphical models with
    symmetry.
  </p>
  <p>	    
    We shall briefly review the facts about proper
    scoring rules and their associated divergences,
    entropy measures, and estimating equations, and
    show how Hyvärinen’s rule leads to simple
    estimating equations for Gaussian graphical
    models. Finally, it shall be discussed how these
    estimates can be used for fast model selection
    in Gaussian graphical models.
  </p>
</div>

<div id="cook">
  <h3>Di Cook: A Survey of Two Decades of Efforts to Build Interactive Graphics Capacity in R</h3>
  <p>What's the difference between these two software descriptions?</p>
	  <blockquote>
		  Lisp-Stat is an extensible statistical
		  computing environment for data analysis,
		  statistical instruction and research, with an
		  emphasis on providing a framework for
		  exploring the use of dynamic graphical
		  methods.
		  <cite>Luke Tierney, 1998</cite>
		</blockquote>
		
		<blockquote>
		  R is a programming language and software
		  environment for statistical computing and
		  graphics.
		  <cite>Wikipedia, Mar 2015</cite>
		</blockquote>
	  
	  <p>
		  R has been eighty-seven steps forward for data
		  analysis but twelve steps backwards for
		  interactive graphics, from where XLispStat
		  (and perhaps Data Desk) had put the field in
		  the 1990s. In the intervening twenty years we
		  have seen numerous contributions towards
		  building the same capacity into R, with no
		  absolute success as of yet. In this talk we
		  will describe some of the key package
		  developments, e.g. gwidgets, tcltk2, RGtk2,
		  iplots, rggobi, rgl, SVGAnnotation, and the
		  current exciting ventures, e.g. cranvas,
		  animint, gridSVG, shiny, ggvis. Differences in
		  how the attempts achieve interaction, that
		  illustrate the strengths and weaknesses of the
		  different approaches, will be discussed, with
		  some emphasis on conceptual models for
		  interactive graphics that support data
		  analysis.
    </p>
</div>

<div id="francois">
  <h3>Romain Fran&ccedil;ois: My R adventures</h3>
  <p>
    I will review my adventure with R, from the
    early days of getting used and addicted to the
    language and its community, my first attempts at
    participating in the community through mailing
    lists and the graphics gallery, valuable
    collaborations with other members of the
    community.
  </p>
  <p>
    For some time now, my interests revolve around
    expressiveness and performance. The way R
    lazily evaluates expressions and allows for
    non standard evaluation has opened a few doors
    over the years, e.g. the rJava higher level
    syntax with J, to which I played a humble
    part, or lately the development of the
    vocabulary of dplyr. About performance, I’ve
    been spending significant time for a few years
    about the ease of which we can connect R with
    C++, the development of modern Rcpp has fed my
    need for both performance and
    expressiveness. The success of the Rcpp family
    of packages is a great testimony to efforts
    that were put in both these directions.
  </p>
  <p>
    Each of these projects I’m involved with are
    not personal developments, but rather results
    of collaboration with relevant members of the
    community. I have learned a lot from these
    projects and hopefully shared some of my
    gained knowledge and expertise along the way.
  </p>
  <p>
    Finally, I will tackle the exciting new
    avenues to explore. RcppParallel with its use
    of the Intel Thread Building Blocks library
    provides interesting means to approach
    parallelization with a compelling syntax and
    set of very approachable design patterns. I
    will give hints on how this is going to
    influence further developments in projects I’m
    mostly involved with, starting from dplyr,
    Rcpp11, Rcpp14.
  </p>
</div>

<div id="holmes">
  <h3>Susan Holmes: Multitype data integration : challenges from the Human Microbiome</h3>
  <p>
    Using the flexibility of multicomponent objects,
    we have developed phyloseq: a Bioconductor
    package for joint analyses of phylogenetic
    trees, species contingency tables, community
    graphs and clinical data.  I will show examples
    of reproducible research done on bacterial
    communities relevant for predicting preterm
    birth and resilience after perturbations using
    phyloseq together with standard ecological
    packages such as vegan and ade4.  Finally, more
    recently we have developed Shiny-Phyloseq which
    runs as a browser application enabling
    biologists unfamiliar with R to analyze their
    microbiome data.
  </p>
  <p>
	  This is joint work with Joey McMurdie and Ben
	  Callahan.
  </p>
</div>

