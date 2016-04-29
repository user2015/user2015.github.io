<h1>Pre-Tutorials</h1>

On this page you find pre-install quotes from the tutorial organisers.
This allows you to be as prepared for the tutorials as possible.

<h2>Morning Tutorials (09:00 - 12:00)</h2>

<h3>Applied Spatial Data Analysis with R (Virgilio Gómez Rubio) - Room: Bondestuen (36 seats)</h3>
See: <a href="http://www.uclm.es/profesorado/vgomez/useR2015">http://www.uclm.es/profesorado/vgomez/useR2015</a>

<h3>Bayesian Networks and Graphical Models with R (Søren Højsgaard and Therese Graversen) - Room: Latinerstuen (42 seats)</h3>

See: <a href="http://people.math.aau.dk/~sorenh/software/gR/index.html">http://people.math.aau.dk/~sorenh/software/gR/index.html</a>

<h3>Data manipulation with dplyr (Hadley Wickham) - Room: Det lille Teater (224 seats)</h3>
Please grab code, slides & data from <a href="http://bit.ly/user15-dplyr">http://bit.ly/user15-dplyr</a><br/>
<tt>install.packages(c("dplyr", "nycflights13"))</tt>

<h3>Efficient statistical consulting using R Workflow for data analysis projects (Peter Baker) - Room: Musiksalen (102 seats)</h3>

<p>Please install the dryworkflow package from github using these commands in R:</p>


<tt>
<p>library(devtools) # available on CRAN (or github)</p>

<p>devtools::install_github("petebaker/dryworkflow", dependencies = TRUE)</p>
</tt>

<p>
You should also install GNU make and git. Git should be installed if you have RStudio installed. Make will be installed on linux systems. Windows users should install Rtools and for MACOSX  please install XCode. For more details please see <a href="https://github.com/petebaker/dryworkflow">https://github.com/petebaker/dryworkflow</a>.
</p>


<h3>Handling missing values with a special focus on the use of principal components methods (François Husson) - Room: Harlekinsalen (30 seats)</h3>
Tutorial slides: <a href="http://math.agrocampus-ouest.fr/infoglueDeliverLive/digitalAssets/79147_user2015-v1.pdf">user2015.pdf</a>. 
If you want to use your laptop, you should install the following packages:<br> 
<tt>FactoMineR, missMDA, VIM, Amelia, norm, mice</tt>.<br>
And you can also download the two datasets and scripts: 
<a href="http://math.agrocampus-ouest.fr/infoglueDeliverLive/digitalAssets/79145_ozoneNA.csv">ozoneNA.csv</a>, 
<a href="http://math.agrocampus-ouest.fr/infoglueDeliverLive/digitalAssets/79148_ozone.R">ozone.R</a>, 
<a href="http://math.agrocampus-ouest.fr/infoglueDeliverLive/digitalAssets/79146_ecological.csv">ecological.csv</a> and
<a href="http://math.agrocampus-ouest.fr/infoglueDeliverLive/digitalAssets/79149_ecological.R">ecological.R</a>.

<h3>RHadoop (Andrie de Vries and Simon Field) - Room: Radiosalen (144 seats)</h3>

<a href="./tutorials#Rhadoop">Tutorial description</a>

<h3>Rocker: Using R on Docker (Dirk Eddelbuettel) - Room: Laugsstuen (60 seats)</h3>

<a href="./tutorials#rocker">Tutorial description</a>

<h3>Statistical analysis of network data (Gabor Csardi) - Room: Gæstesalen (90 seats)</h3>

<a href="./tutorials#network">Tutorial description</a>

<h2>Afternoon Tutorials (13:30 - 16:30)</h2>

<h3>Analysis and Visualization of Large Complex Data with Tessera (Ryan Hafen and Stephen Elston) - Room: Gæstesalen (90 seats)</h3>

See: <a href="http://tessera.io/docs-UseR2015/">http://tessera.io/docs-UseR2015</a>

<h3>Applied Machine Learning and Efficient Model Selection with mlr (Bernd Bischl and Michel Lang) - Room: Musiksalen (102 seats)</h3>
<p>Please install the required packages from CRAN:<br/>

<tt>install.packages(c("glmnet", "gridExtra", "ggplot2", "ggvis", "kknn",
"irace", "kernlab", "KMsurv", "mlbench", "mda", "mlr", "party",
"randomForest", "randomForestSRC", "shiny", "sROC", "devtools",
"survMisc", "BatchJobs", "e1071", "rjson"))</tt></p>

<p>Furthermore, please also download the mlr tutorial:
<a href="https://mlr-org.github.io/mlr-tutorial/tutorial/release/mlr_tutorial.zip">mlr_tutorial.zip</a></p>

<h3>Bioconductor for high-throughput sequence analysis (Martin Morgan) - Room: Latinerstuen (42 seats)</h3>

See <a href="https://github.com/Bioconductor/useR2015/">https://github.com/Bioconductor/useR2015/</a>

<h3>Getting to Know Grid Graphics (Paul Murrell) - Room: Laugsstuen (60 seats)</h3>
See: <a href="https://www.stat.auckland.ac.nz/~paul/useR2015-grid/">https://www.stat.auckland.ac.nz/~paul/useR2015-grid/</a>

<h3>Introduction to Bayesian Data Analysis with R (Rasmus Bååth) - Room: Radiosalen (144 seats)</h3>
Make sure to bring a laptop running R with the MCMCpack and the rjags packages installed.<br/>
To make sure these packages work, try running the following script in an R session: <a href="https://gist.github.com/rasmusab/a453c564f30692c63d38">https://gist.github.com/rasmusab/a453c564f30692c63d38</a>

<h3>spatstat: An R package for analysing spatial point patterns (Adrian Baddeley and Ege Rubak) - Room: Harlekinsalen (30 seats)</h3>
Please bring your own laptop, with the latest version of R and spatstat installed.<br/>
Please ensure that all the ‘Suggested’ packages for spatstat are also installed,</br>
which can be achieve with the command:  <tt>install.packages("spatstat", dependencies=TRUE)</tt>

<h3>Testing R Code (Richard J. Cotton) - Room: Det lille Teater (224 seats)</h3>
Required packages: <tt>assertive, testthat, ggplot2, sig, Hmisc, data.table, plyr, dplyr, mice</tt>

<h3>Using Pandoc's markdown with R (Gergely Daróczi) - Room: Bondestuen (36 seats)</h3>
Please make sure you have pandoc installed (either manually from <a href="http://pandoc.org">http://pandoc.org</a> or by installing RStudio,
which includes this software), optionally also install pdflatex for the PDF examples.<br/>
Required R packages: <tt>knitr, shiny, pander, rapport</tt> -- all available from CRAN.<br/>
If you would rather use a Docker image, please pull <a hrer="https://registry.hub.docker.com/u/cardcorp/r-pandoc">https://registry.hub.docker.com/u/cardcorp/r-pandoc</a><br/>
If you have any question, please feel free to mail me at <a href="mailto:daroczig@rapporter.net">daroczig@rapporter.net</a>.
