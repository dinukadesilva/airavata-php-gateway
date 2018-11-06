<div class="container">
  <div class="content">
    <div class="text-center">
      <h2 class="title top-space">Documentation</h2>            
    </div>

    <ul class="nav nav-tabs nav-justified" role="tablist">
      <li role="presentation" class="active"><a href="#instructure" role="tab" data-toggle="tab">Instructions</a></li>
      <li role="presentation"><a href="#sp" role="tab" data-toggle="tab">Software/Package</a></li>
      <li role="presentation"><a href="#input" role="tab" data-toggle="tab">Input</a></li>
      <li role="presentation"><a href="#output" role="tab" data-toggle="tab">Output</a></li>
    </ul>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="instructure">
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10 col-xs-12">
          <p class="description" style="padding:16px">
         1)&nbsp;&nbsp;<b>Login</b>:<br>
The user needs to log in by clicking 'login' link at the top-right corner of the page. Having an account provides a number of benefits, and is free and easy. 
          </p>
<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="dREG login" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dreg.login.png" ></img></div>


          <p class="description" style="padding:16px">
         2)&nbsp;&nbsp;<b>Create a new project (optional)</b><br>
Optionally, users can choose to make a new 'project' in the dREG gateway to archive a collection of dREG data from related experiments.  This will allow a collection of experiments to be stored in close proximity to each other.</p>
<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="dREG project" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dreg.create.project.png" ></img></div>

    

      <p class="description" style="padding:16px">
         3)&nbsp;&nbsp;<b>Start new dREG</b><br>
Select the menu 'Start dREG' below the dREG logo to create an data analysis for your data, as the following screenshot.
</p>
<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="dREG experiment" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dreg.create.exp.png" ></img></div>

          <p class="description" style="padding:16px">
         4)&nbsp;&nbsp;<b>Select bigWig files</b><br>
Select bigWig files representing PRO-seq, GRO-seq, or ChRO-seq signal on the plus and minus strand. Please notice that two GPU resources are available now, currently it is easier to get the computation resources on <A href="http://comet.sdsc.xsede.org/">Comet.sdsc.xsede.org</A> than <A href="https://www.psc.edu/index.php/bridges">Bridges.psc.edu</A>. 
          </p>

<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="dREG experiment create" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dreg.create.exp2.png" ></img></div>

          <p class="description" style="padding:16px">
         5)&nbsp;&nbsp;<b>Submit the job</b><br>
Click the 'save and launch' button.  BigWig file are transferred to the XSEDE server and a GPU queue is scheduled to run dREG. After submitting, the user can check the status in the next web page, as shown below. Depend on the queue status, the job maybe wait for a long time to start prediction. Once started, it will only take 1-4 hours to complete.</p>


          <p class="description" style="padding:16px">
         6)&nbsp;&nbsp;<b>Check the status</b><br>
The user can check the status of their 'experiment' by clicking the menu 'Saved dREG runs' below the dREG logo.
          </p>
<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="dREG experiment browse" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dreg.exp.list.png"></img></div>

          <p class="description" style="padding:16px">
         7)&nbsp;&nbsp;<b>Check the results</b><br>
Once a job is completed, the user can select 'Full results' in the drop-down list and then LEFT-click <B>'Download'</B> link in the experiment summary page to download a compressed file described in the <a href="#output" role="tab" data-toggle="tab">'output'</A> sheet in this page, or the user can download any single file from the drop-down list. The downloaded file with the 'tar.gz' extension can be decompressed by the 'tar' command, the file with the 'gz' extension can be decompressed by the 'gunzip' command in Linux. Please <font color="red">don't use RIGHT-click </font>  to open a tab for downloading.</br>
</br>
In <font color="RED">Safari</font>, it could be problematic because Safari tries to unzip the compressed results automatically using a non-compatible compress method. Please check <A href="https://octet.oberlin.edu/does-your-mac-unzip-zip-files-automatically/"> this link </A> to disable this feature.</p>

<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="dREG experiment summary" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dreg.exp.summary.png"></img></div>

         <p class="description" style="padding:16px">
         8)&nbsp;&nbsp;<b>Switch to Genome Browser</b><br>
The convenient tool provided by the gateway is the user can check the results in the Genome Browser by clicking <b>'Switch to genome browser'</B> link. The genome identifier must be specified by two ways, 1) select from the drop-down list or 2) fill the identifier in the textbox. Please use LEFT-click to open a genome browser window.</p>

<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="dREG experiment summary" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dreg.gbview.png"></img></div>

          <p class="description" style="padding:16px">
         9)&nbsp;&nbsp;<b>Check the storage</b><br>
The user can LEFT-click <b>'Open Folder'</b> link in the experiment summary page to check the storage for the current job or click the menu 'Storage' under the dREG logo to check the folders and files for all jobs(experiments). 
The following figure shows the data files in the job's folder, including two bigWig files, one result in bedgraph format, two outputs of job scheduler on GPU nodes.</p>

<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="dREG experiment summary" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dreg.exp.folder.png"></img></div>

<a name="failure"></a> 
         <p class="description" style="padding:16px">
         10)&nbsp;&nbsp;<b>When you meet failure</b><br>

Currently when you run the dREG jobs, there are two types of errors you may have. One error may come from the system, called a system error, such as no computing time on specific GPU nodes or an internal errors in Apache Airavata. The other type of error is caused by the users' bigwig, called bigwig error, which can occur when read counts are normalized, each read is mapped to a region, or read counts in minus strand are positive values. The following figures show how to identify the error and how to handle it. </p>


         <p class="description" style="padding:16px">
         a)&nbsp;&nbsp;<b>System error</b><br>
When users submit the experiment, the failure will be shown in the experiment summary page soon as figure 10-S1 or 10-S2. The <b>experiment status</b> is "Failed" and many java errors are shown in the <b>"Errors"</b> item. Users can't solve this problem and should report this error the web master.</p>

<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="System error(1)" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/failure1.png"></img></div>
<div style="clear:both;text-align:center;"><center>Figure 10-S1</center></div>

<br>

<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="System error(2)" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/failure2.png"></img></div>
<div style="clear:both;text-align:center;"><center>Figure 10-S2</center></div>

<br>
         <p class="description" style="padding:16px">
         b)&nbsp;&nbsp;<b>Bigwig error</b><br>
After the experiment is complete, no results can be downloaded and job status shows a failure (see Figure 10-S3). Users can find the dREG log file or task log file to identify the problem. Enter into <b>"storage directory"</b> by clicking the <b>"open"</b> link. The users can find <b>"ARCHIVE"</b> folder where Apache Airavata copy back all files from the computing node. Check the dREG log file (<b>out.dREG.log</b>) to see the bigwig problem or check the task log file ("slurm-tasknoxxx.out") and find the reason why the task is aborted. Figure 10-S4 and 10-S5 give a two examples for this kind of error. If the bigwig has problems, please refer to this <A href="https://github.com/Danko-Lab/tutorials/blob/master/PRO-seq.md#read-mapping">link</a> to solve the problems.</p>

<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="Bigwig error" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/failure3.png"></img></div>
<div style="clear:both;text-align:center;"><center>Figure 10-S3</center></div>
<BR>

<p>This figure shows the bigWig problems in the dREG log file.</p>

<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="Bigwig error(1)" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/failure3-reason.png"></img></div>
<div style="clear:both;text-align:center;"><center>Figure 10-S4</center></div>
<BR>

<p>This figure shows the task log file in which explains the task was killed due to time limit.</p>

<div style=" display: flex;justify-content: center"><img style="align-self: center;width:70%" alt="Bigwig error(2)" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/failure4-reason.png"></img></div>
<div style="clear:both;text-align:center;"><center>Figure 10-S5</center></div>
<BR>

        </div>
      </div>

    </div>

<!---- SOFTWARE PANEL -->
      <div role="tabpanel" class="tab-pane" id="sp">
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10 col-xs-12">
          <p class="description">The <B>dREG gateway</B> is web service built on the Apache Airavata software framework and the XSEDE platform using the following software packages:</p>

          <p class="description">[1] <B>dREG package</B>: <A href="https://github.com/Danko-Lab/dREG">https://github.com/Danko-Lab/dREG</A>.</p>
          <p class="description">
The dREG package is developed to detect the divergently oriented RNA polymerase in GRO-seq, PRO-seq, or ChRO-seq data using support vector machines (e1070 or Rgtsvm package).</p>
          <p class="description">[2] <B>dREG.HD package</B>: <A href="https://github.com/Danko-Lab/dREG.HD">https://github.com/Danko-Lab/dREG.HD</A>.</p>
          <p class="description">The dREG.HD pa/ckage refines the location of TREs obtained using dREG by imputing DNAse-I hypersensitivity.</p>
          <p class="description">[3] <B>Rgtsvm package</B>: <A href="https://github.com/Danko-Lab/Rgtsvm">https://github.com/Danko-Lab/Rgtsvm</A>.</p>
          <p class="description">
Rgtsvm implements support vector classification and support vector regression on a GPU to accelerate the computational speed of training and predicting large-scale models. </p>

          <p class="description">[4] <B>Airavata PHP Gateway</B>: <A href="https://github.com/apache/airavata-php-gateway.git">https://github.com/apache/airavata-php-gateway.git</A>.</p>          <p class="description">
Airavata PHP Gateway provides an API to build web sites which interact with high performance computers that are part of XSEDE.
</p>

        </div>
      </div>
    </div>

<!---- INPUT PANEL -->

      <div role="tabpanel" class="tab-pane" id="input">
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10 col-xs-12">

<p class="description" align="justify">The input to dREG consists of two bigWig files which represent the position of RNA polymerase on the positive and negative strands. The sequence alignment and processing steps to make the input bigWig files are a major factor influencing how accurately dREG predicts TIRs. dREG makes several assumptions about data processing that are critical for success. </p>

<p class="description" align="justify">Critical elements of a bioinformatics pipeline that is compatible with dREG will include:</p>
<ul> 
<li class="description" style="align:justify"><b>Representing RNA polymerase location using a single base.</b><br/>
<p class="description" align="justify">PRO-seq measures the location of the RNA polymerase active site, in many cases at nearly single nucleotide resolution. Therefore, it is logical to represent the coordinate of RNA polymerase using the genomic position that best represents the polymerase location, rather than representing the entire read. dREG assumes that each read is represented in the bigWig file by a single base. We have noted poor performance when reads are extended. It is critical that users pass in bigWig files that represent RNA polymerase using a single nucleotide.</p>
</li>

<li class="description"><b>Include a copy of the Pol I transcription unit in the reference genome. </b><br/>
<p class="description" align="justify">PRO-seq data resolves the location of all four RNA polymerases found in Metazoan cells (Pol I, II, III, and Mt). DNA encoding the Pol I transcription unit is highly repetitive, and is not included in most mammalian reference genomes. Nevertheless, the Pol I transcription unit is a substantial source of reads in a typical PRO-seq experiment (10-30%). Many of these reads will align spuriously to retrotransposed and non-functional copies of the Pol I transcription unit, which can create mapping artifacts. To solve this issue, we include a single copy of the repeating DNA that encodes the Pol I transcription unit in the reference genome used to map reads. We use <A target=_blank href="https://www.ncbi.nlm.nih.gov/nuccore/U13369.1?report=fasta"><span style="background-color: #FFFF00">GenBank ID# U13369.1</span></A>. Including a copy of this transcription unit provides an alternative place for Pol I reads to map, preventing reads from accumulating in Pol I repeats.</p>
</li>

<li class="description"><b>Trim 3' adapters, but leave the fragments. </b><br/>
<p class="description" align="justify">Much of the signal for dREG comes from paused RNA polymerase. RNA polymerase pauses 30-60 bp downstream of the transcription start site. Due to this short RNA fragment length, paused reads in most PRO-seq libraries will sequence a substantial amount of adapter. This leads to poor mapping rates in full-length reads. Therefore, it is crucial to remove contaminating 3' adapters so that paused fragments will map to the reference genome properly.</p>
</li>

<li class="description"><b>Data represents unnormalized raw counts. </b><br/>
<p class="description" align="justify">dREG assumes that data represents the number of individual sequence tags that are located at each genomic position. For this reason, it is critical that input data is not normalized. The dREG server checks to ensure that input data is expressed as integers, and will return an error if this is not the case.</p>
</li>
</ul>
 
<p class="description"> Users can also use scripts generated in the Danko lab to create compatible bigWig files. Options for scripts at different starting points in the analysis are given below: </p>

<ul>
<li class="description"><b>Convert raw fastq files into bigWig</b>.<br/> 
<p class="description" align="justify">Our pipeline produces bigWig files that are compatible with dREG, and can be found at the following URL: <A target=_blank href="https://github.com/Danko-Lab/proseq_2.0">https://github.com/Danko-Lab/proseq_2.0</A>. Our PRO-seq pipeline takes single-end or pair-ended sequencing reads (fastq format) as input. The pipeline automates routine pre-processing and alignment steps, including pre-processing reads to remove the adapter sequences and trim based on base quality, and deduplicate the reads if UMI barcodes are used. Sequencing reads are mapped to a reference genome using BWA. Aligned BAM files are converted into bigWig format in which each read is represented by a single base.</p>
</li>

<li><b>Convert mapped reads in BAM files into bigWigs</b>.<br/>
<p class="description" align="justify">We provide a tool that converts mapped reads from a BAM file into bigWig files that are compatible with dREG. This tool is available here: <A target=_blank href="https://github.com/Danko-Lab/RunOnBamToBigWig">https://github.com/Danko-Lab/RunOnBamToBigWig</A>.</p> 
</li>
</ul>
 
<p class="description">Other considerations:</p> 
<ul>
<p class="description" style="justify"> The quality and quantity of the experimental data are major factors in determining how sensitive dREG will be in detecting TREs. We have found that dREG has a reasonable statistical power for discovering TREs with as few as ~40M uniquely mappable reads, and saturates detection of TREs in well-studied ENCODE cell lines with >80M reads. To increase the number of reads available for TRE discovery, we encourage users to merge biological replicates in order to improve statistical power prior to running dREG.</p> 

<p class="description" style="justify">We have found that visualizing aligned data in a genome browser prior (e.g., IGV or UCSC) to downstream analysis is a useful way to catch any data quality or alignment issues.</p>

</ul>
        </div>
      </div>
    </div>

<!---- OUTPUT PANEL -->

      <div role="tabpanel" class="tab-pane" id="output">
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10 col-xs-12">

          <p class="description">
1) dREG run generates a compressed file including the <font color="green"> dREG results </font> as follows:
          </p>
<p class="description">&nbsp;</p>

          <table class="table">
              <tr>
                    <th>File name</th>
                    <th>Description</th>
              </tr>
              <tr>
                    <td>$PREFIX.dREG.infp.bed.gz</td>
                    <td>Informative positions with dREG scores predicted by the dREG model. Decompress it with 'gunzip' in Linux.</td>
              </tr>
              <tr>
                    <td>$PREFIX.dREG.peak.full.bed.gz</td>
                    <td>Significant peaks (FDR < 0.05) with dREG scores, p-values and center positions where the maximum dREG scores are located. Decompress it with 'gunzip' in Linux.</td>
              </tr>
              <tr>
                    <td>$PREFIX.dREG.peak.score.bed.gz</td>
                    <td>Significant peaks (FDR < 0.05) only with dREG scores. Decompress it with 'gunzip' in Linux.</td>
              </tr>

              <tr>
                    <td>$PREFIX.dREG.peak.prob.bed.gz</td>
                    <td>Significant peaks (FDR < 0.05) only with p-values. Decompress it with 'gunzip' in Linux.</td>
              </tr>

              <tr>
                    <td>$PREFIX.dREG.raw.peak.bed.gz</td>
                    <td>All raw peaks generated by dREG peak calling, including dREG scores, uncorrected p-values, center positions where the maximum are located in smoothed curves, center positions where the maximim are lcoated in original curve, centroid. Only available in the Web storage.</td>
              </tr>

              <tr>
                    <td>$PREFIX.tar.gz</td>
                    <td>Including above 5 files, can be decompressed by 'tar -xvzf' in Linux.</td>
             </tr>
            </table>
 
<div style="padding:20px;
border-style: solid;
border-width: 5;
border-color: #dadada;" data-expandable-box-container="true">
<figcaption>
<div style="padding-bottom:15px" id="Sec2">Box 1:<b> Brief description of key terms</b></div>
</figcaption>

<div class="suppress-bottom-margin add-top-margin">
<p><b>Informative position:</b>
Loci denoted as "informative positions" meet the following criteria: contain more than 3 reads in 100 bp interval on either strand, or more than 1 read in 1Kbp interval on both strands. Informative positions are used to predict the dREG scores for TRE (Transcription Regulatory Element) identification. </p>

<p><b>dREG score:</b>
Training and prediction is done using a Support Vector Regression model where a label of 1 indicates RNA polymerase II initialization or transciption through the informative position. The predicted values from the pre-trained model are called dREG scores. A dREG score close to 1 indicates that a position likely a TRE. 
</p>

<p><b>Peak p-value:</b>
We test 5 dREG scores around each candidate peak center using the NULL hypothesis that each point within this peak is drawn from the non-TRE distribution. This test estimates the statistical confidence of each candidate dREG peak. In the final result, FDR is applied to do multiple correction and only the peaks with adjusted p-value < 0.05 are reported.   
</p>


</div></div>

<br/>

<p class="description">
2) In the Web storage folder there are <font color="green">some files required by the WashU</font> genome browser:
</p>
<p class="description">&nbsp;</p>
          <table class="table">
              <tr>
                    <th>File name</th>                    <th>Description</th>              </tr>
              <tr>
                    <td>$PREFIX.dREG.infp.bw</td>
                    <td>The bigWig file converted from the bed file of informative positions ($PREFIX.dREG.infp.bed.gz).</td>
              </tr>
              <tr>
                    <td>$PREFIX.dREG.peak.score.bw</td>
                    <td>The bigWig file converted from the significant peaks (FDR < 0.05) with dREG scores ($PREFIX.dREG.peak.score.bed.gz).</td>
              </tr>
              <tr>
                    <td>$PREFIX.dREG.peak.prob.bw</td>
                    <td>The bigWig file converted from the significant peaks (FDR < 0.05) with p-values ($PREFIX.dREG.peak.prob.bed.gz).   </td>
              </tr>

              <tr>
                    <td>*.bed.gz.tbi</td>
                    <td> The index files generated from the corresponding bed files. Please ignore them if you download the results.</td>
              </tr>
         </table>

 <p class="description">
3) There are <font color="green">two log files </font> in the Web storage folder:</p>
<p class="description">&nbsp;</p>
        <table class="table">
              <tr>
                    <th>File name</th>                    <th>Description</th>              </tr>
              <tr>
                    <td>$PREFIX.dREG.log</td>
                    <td>Print the summary information after peak calling. If the bigWigs don't meet the requirements of dREG, the warning information will be outputted in this file.
                    </td>
              </tr>
              <tr>
                    <td>slurm-??????.out</td>
                    <td>The verbose logging output of dREG package.</td>
             </tr>
         </table>
         </div>
      </div>
    </div>


  </div><!-- /.content -->

<br style="clear:both"/>
<hr style="color:green"/>

</div>


<div class="col-md-12 text-center" style=" padding: 20px 0 20px 0; background-color:#FFFFFF">
	<a href="http://airavata.apache.org/" target="_blank">
		<img width="200px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/poweredby-airavata-logo.png">
	</a>
	<a href="http://www.nsf.gov/" target="_blank" class="logo-seperation">
		<img width="200px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/nsf-logo.png">
	</a>
	<a href="https://www.xsede.org/" target="_blank" class="logo-seperation">
		<img width="200px" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/powered-by-xsede.gif">
	</a>
</div>
