-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 02:58 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `u_name` text NOT NULL,
  `u_email` text NOT NULL,
  `u_subj` text NOT NULL,
  `u_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `u_name`, `u_email`, `u_subj`, `u_message`) VALUES
(1, 'ert', 'fdgg@gmail.com', 'we', 'dgfh fhghg');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `m_id` int(11) NOT NULL,
  `m_title` varchar(50) NOT NULL,
  `uni_name` varchar(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `m_preview` text NOT NULL,
  `m_date` date NOT NULL,
  `r_idFK` bigint(14) NOT NULL,
  `super_name` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`m_id`, `m_title`, `uni_name`, `faculty_name`, `m_preview`, `m_date`, `r_idFK`, `super_name`, `file`) VALUES
(1, 'RESEARCH IN AUTOMATIC GENERATION OF CLASSIFICATION', 'minia', 'computer science', 'This paper is concerned with the organization of information, in the form of documents, for efficient storage and retrieval. By documents we mean books, technical reports, articles, memoranda, letters, photographs, data facts, etc.-all forms of memory file organization ranging from documents in a library to data in a real-time command-and-control system. Therefore, the implications of this work are applicable to a field broader than the concerns of the ordinary library.', '1964-12-09', 23487193452104, 'Moheb Ramzy Girgis', '1519249214.pdf'),
(2, 'International Research Journal of Engineering and ', 'mansoura', 'FCI', 'In activity tracking system using image processing there are several activity taking place such as Object classification, Edge detection of the object in image form, Military, Space science, Object counting in different environment according the condition. An efficient method of removing noise from the images, before applying image processing them for further analysis is a great challenge for researchers. The noise can degrade the image at the time when we capturing or transmission of the image. Before applying image processing tools to an image, noise removal from the image is done at highest priority. The kind of noise removal algorithms to eliminate from the noise depends on the types of noise present in the image. In this paper we used two methods for removal the noise from the image and compare the result of proposed system and Median filter in the terms of PSNR parameter. The results show that the proposed system is better than the Median filter.', '2017-06-07', 23487193452104, 'Omar Abdel-Rahman', '1519249609.pdf'),
(3, 'Data Dynamics for Storage Security and Public Audi', 'alexandria', 'computer science', 'Cloud Computing has been envisioned as the next-generation architecture of IT Enterprise. It moves the application software and databases to the centralized large data centers, where the management of the data and services may not be fully trustworthy. The unique paradigm brings about many new security challenges, which have not been well understood. The work studies the problem of ensuring the integrity of data storage in Cloud Computing. In particular, consider the task of allowing a third party auditor (TPA), on behalf of the cloud client, to verify the integrity of the dynamic data stored in the cloud. The introduction of TPA eliminates the involvement of the client through the auditing of whether his data stored in the cloud is indeed intact, which can be important in achieving economies of scale for Cloud Computing. The support for data dynamics via the most general forms of data operation, such as block modification, insertion and deletion, is also a significant step toward practicality, since services in Cloud Computing are not limited to archive or backup data only. While prior works on ensuring remote data integrity often lacks the support of either public auditability or dynamic data operations, it achieves both. It first identify the difficulties and potential security problems of direct extensions with fully dynamic data updates from prior works and then show how to construct an elegant verification scheme for the seamless integration of these two salient features in the protocol design. In particular, to achieve efficient data dynamics, to improve the existing proof of storage models by manipulating the classic Merkle Hash Tree construction for block tag authentication. To support efficient handling of multiple auditing tasks, and further explore the technique of bilinear aggregate signature to extend the main result into a multi-user setting, where TPA can perform multiple auditing tasks simultaneously. Extensive security and performance analysis show that the proposed schemes are highly efficient and provably secure.', '2012-02-10', 29506058800449, 'Ali Fahim', '1519249776.pdf'),
(4, 'Artificial Intelligence Bigdata MOBLET', 'menoufia', 'FCI', 'Artificial Intelligence is the field studies the synthesis & analysis of computational agents that act intelligently. This paper is described about the creation of Artificial Intelligence Moblet using novelty OS (Jyotis) by controlling the system through voice and the nature of intelligence. A measurement framework of intelligent capability of humans and systems is comparatively studied in the forms of intelligent quotient, intelligent equivalence, and intelligent metrics. As we give voice command to the system, by using Brute Force and Greedy Algorithm getting responses faster than human. On the basis of those algorithms, implementing voice reorganization into the system. Accessing the stored data from the system and retrieving from the data through voice command and also from our own server, but not retrieve using search engines such as Google, Yahoo, Bing and so on. By using Cloud computing (on-demand computing) we can import and export data to Hadoop using Sqoop, is a kind of Internet-based computing that provides shared processing resources and data to computers and other devices on-demand. Access to a shared pool of configurable computing resources connects through a cloud server by using SSH and the host name. This moblet has as separate OS name Jyotis (linux platform) it can also capable of running. apk files and .exe file(through wine).I have included the .apk package to my OS. Which is user friendly in nature? Keywords: AI; brain science Algorithm; intelligent quotient; Big Data; Cloud Computing, System model, Jyotis, Design, HDFS, Map Reduce, Modes.', '2016-03-03', 29506058800449, 'Abdel Rahman Zekri', '1519250141.pdf'),
(5, 'A Survey: Soft computing in Intelligent Informatio', 'minia', 'computer science', 'this paper provides an in-depth survey of challenges in the design of intelligent information retrieval systems, pointing out some similarities and differences in the core data mining and web based search operations. The procedures for evaluation of search engine performance and implicit feedback of the user with respect to a search result are studied with references to the different algorithms. We have proposed a novel neural satisfaction based feedback vector in contrast to the existing activity pattern based feedback as a future research direction in Intelligent IR. We addressed the select research work in the area of soft information retrieval using fuzzy sets, artificial neural networks, genetic algorithms and probabilistic information retrieval. As an instance of information retrieval, web mining is a set of operations to retrieve relevant documents from preprocessed, crawled and indexed web, and it can be categorized into more specialized tasks of web content mining, web structure mining and web usage mining. We have given a survey of the important reviews on topic of web mining and its associated tasks. On the basis of Identified challenges in information retrieval in general, and web mining in particular, we have concentrated on applicability of soft computing techniques and their hybrids in web mining, the performance related issues of select solutions, future of web mining and the next generation userâ€™s expectations from a search engine.', '2012-12-06', 29301142401494, 'Moheb Ramzy Girgis', '1519250465.pdf'),
(6, 'Motion Analysis Marker for Ease of Image Processin', 'alexandria', 'FCI', 'High speed machines and mechanisms are often studied from a sequence of images obtained from high speed videography. The use of markers printed or attached on moving parts can greatly assist in tracking the moving parts. We present the design of a marker suitable for planar motion analysis of mechanism. The marker is designed to make the task of image processing computationally less intensive so as to make real time motion analysis practical. Rosenfeld equivalence table algorithm is used to segment the input image. The new geometry of marker facilitates automatic tracking and provides both position and orientation information. Hu invariant moments are used for recognition of the marker shape in the segmented image. Markers are uniquely identified on the basis of a text code that is placed in a designated location with respect to the marker geometry. In this method, the bounding box for the text code is computed. Knowing the orientation of the marker and therefore the text orientation, it is possible to transform the sub-image, containing the text, so that the text is aligned horizontally. This will permit a standard OCR routine to read the text code. The motion of various moving parts in image sequence can be easily inferred once the position and orientation of each of the marker is known.', '2009-11-07', 29301142401494, 'Heba Mamdouh', '1519251202.pdf'),
(7, 'A Cluster Separation Measure', 'cairo', 'FCI', 'A measure is presented which indicates the similarity of clusters which are assumed to have a data density which is a decreasing function of distance from a vector characteristic of the cluster. The measure can be used to infer the appropriateness of data partitions and can therefore be used to compare relative appropriateness of various divisions of the data. The measure does not depend on either the number of clusters analyzed nor the method of partitioning of the data and can be used to guide a cluster seeking algorithm.', '1979-04-02', 29106282400121, 'Abdel-rahman Mohamed', '1519251632.pdf'),
(8, 'Assembling of Human Beings in an Image to Detect a', 'alexandria', 'computer science', 'Data clustering is a method in which we make cluster of objects that are somehow similar in characteristics. The criterion for checking the similarity is implementation dependent. If data has some meaning and it corresponds to a human being, than how we can group it in an image or a video. In this research work, I have used an algorithm for group detection in an image which is based on distance. In this paper, algorithm uses the concept of distance between the persons to detect groups in an image linear dimensionally.', '2016-03-10', 29106282400121, 'Ahmed Ali Abdelalim', '1519251857.pdf'),
(9, 'CLOUD COMPUTING: A NEW PARADIGM FOR DATA STORAGE I', 'assiut', 'FCI', 'This article focuses on the future scope of cloud computing for universities in India. Such new technology can be utilized in management of educational activities using IT for modernization and development of educational systems with increased volume of data. By means of cloud computing, an IT administrator can deal with the maintenance of the university components like labs, library, and research facilities at various locations in the university. The implementation of cloud computing will help the universities by reducing the expenditure with decreasing their demand for software licensing and it has operational benefits. Here, we suggest that, in developing countries like India, the concept of cloud computing will offer pooling of resources, which will ultimately cut the incurred expenditure. Cloud computing services can provide inter-organizational collaborations and thus they will enhance the research level of the country.', '2011-11-05', 24090919912527, 'Fatima Azzam', '1519252536.pdf'),
(10, 'Internet of Things for Smart Cities', 'bani suef', 'computer science', 'The Internet of Things (IoT) shall be able to incorporate transparently and seamlessly a large number of different and heterogeneous end systems, while providing open access to selected subsets of data for the development of a plethora of digital services. Building a general architecture for the IoT is hence a very complex task, mainly because of the extremely large variety of devices, link layer technologies, and services that may be involved in such a system. In this paper, we focus specifically to an urban IoT system that, while still being quite a broad category, are characterized by their specific application domain. Urban IoTs, in fact, are designed to support the Smart City vision, which aims at exploiting the most advanced communication technologies to support added-value services for the administration of the city and for the citizens. This paper hence provides a comprehensive survey of the enabling technologies, protocols, and architecture for an urban IoT. Furthermore, the paper will present and discuss the technical solutions and best-practice guidelines adopted in the Padova Smart City project, a proof-of-concept deployment of an IoT island in the city of Padova, Italy, performed in collaboration with the city municipality.', '2014-02-01', 24090919912527, 'Abdelmgid Ali', '1519252852.pdf'),
(11, 'REVIEW ON WIND-SOLAR HYBRID POWER SYSTEM ', 'Banha', 'computer science', ' The demand for electricity power is increasing day by day, which cannot be met with the satisfied level without non-renewable energy resource. Renewable energy sources such as wind, solar are universal and ecological. These renewable energy sources are best options to fulfill the world energy demand, but unpredictable due to natural conditions. The use of the hybrid solar and wind renewable energy system like will be the best option for the utilization these available resources. The objective of this research paper is to study the various aspects of hybrid solar and wind system. The application and different theories related to the development of hybrid also discussed in this paper. ', '0217-04-02', 23487193452146, 'Mohammed Kayed', '1519287450.pdf'),
(12, 'Application of Optimized GSA Algorithm on Bad-data', 'Beni-Suef', 'FCI', 'The detection and identification of the bad data of the power system plays an important role in dispatching personnel to grasp the running status of the power grid in real time. In order to overcome negative effects of random selection of clustering initial values of traditional GSA bad data identification algorithm on identification precision and computation rate, this paper propose an optimized GSA algorithm based on area density statistics method. This algorithm by computing the area density of each cluster object to select k points that are farthest from each other and are at the highest area density as the initial cluster center. The experimental results show that the optimized GSA algorithm improves the accuracy of the degree of clustering dispersion and the recognition accuracy of the bad data. At the same time, the algorithm greatly reduces the computational complexity of iterative computation, improves the computing speed and saves a lot of computing time. In the case of huge system and large amount of data, this method is a rapid and efficient algorithm, and has potential of good application.', '2017-08-02', 24090919912527, 'rehab mohamed', '1519287657.pdf'),
(13, 'The New Planning of Voltage Stability in the Restr', 'Aswan', 'computer science', 'Because of the complexity of the restructured power system, voltage stability is very important in order to review and provide the appropriate solution to keep the system in a steady state after any disturbance and be able to suggest and run the best possible solution for each disturbance .in this case, The voltage profiles stay in the range of its own allowable variation. first of all, The methods of determining the voltage profile and conceptions of disturbance in the restructured power system is described. Then by learning how to get the optimal point and optimization algorithms conclude that If the voltage profile is calculated by using teaching and learning algorithms and load flow is computed by  Newton Raphson, then we have gotten  the optimal point. Hence, The independent operator of restructured power system can implement optimal points in the network by using the flexible transmission systems.', '2017-06-01', 29301142401494, 'Enas Mahmoud', '1519287754.pdf'),
(14, 'NEW TOPOLOGIES OF KALMAN FILTERS FOR DYNAMIC POWER', 'Helwan', 'FCI', 'PowerÂ systemÂ stateÂ estimationÂ requiresÂ errorÂ lessÂ dataÂ toÂ estimateÂ theÂ exactÂ statesÂ ofÂ theÂ powerÂ system.Â  TheÂ EstimationÂ processÂ isÂ doneÂ byÂ EnergyÂ ManagementÂ SystemÂ (EMS)Â atÂ theÂ controlÂ centreÂ withÂ theÂ  helpÂ ofÂ estimatedÂ data.Â InÂ practicalÂ conditions,Â collectedÂ dataÂ containÂ theÂ measurementÂ andÂ processÂ  errors.Â TheseÂ errorsÂ areÂ dueÂ toÂ highÂ speedÂ measuringÂ devicesÂ andÂ PhasorÂ MeasurementÂ UnitsÂ (PMU)Â  installedÂ onÂ differentÂ buses.Â DueÂ toÂ communicationÂ errors,Â differentÂ filtrationÂ techniquesÂ areÂ requiredÂ atÂ  theÂ controlÂ centreÂ toÂ getÂ theÂ bestÂ estimatedÂ data.Â ForÂ nonlinearÂ powerÂ system,Â newÂ improvedÂ KalmanÂ  filterÂ techniquesÂ areÂ introducedÂ inÂ thisÂ paper.Â EmergingÂ ExtendedÂ KalmanÂ FilterÂ (E-EKF)Â andÂ EmergingÂ  UnscentedÂ KalmanÂ FilterÂ (E-UKF)Â basedÂ onÂ theÂ exponentialÂ descriptionÂ functionÂ areÂ proposedÂ inÂ thisÂ  paper.Â TheÂ effectivenessÂ ofÂ theseÂ improvedÂ techniquesÂ isÂ comparedÂ withÂ theÂ conventionalÂ nonlinearÂ  filtersonÂ theÂ basisÂ ofÂ elapsedÂ timeÂ andÂ RootÂ MeanÂ SquareÂ ErrorÂ (RMSE).Â TheÂ performanceÂ ofÂ theseÂ  filtersÂ isÂ testedÂ onÂ standardÂ IEEE-30Â busÂ testÂ system.Â ', '2017-11-23', 29506058800449, 'Mohammed Ismail', '1519287897.pdf'),
(15, 'Vehicle-to-grid power system services with electri', 'Alexandria', 'FCI', 'With proper power scheduling and dynamic pricing, a unidirectional charger can provide benefits and regulation services to the electricity grid, at a level approaching that of bidirectional charging. Power scheduling and schedule flexibility of electric and plug-in hybrid vehicles are addressed. The use of electric vehicles (EVs) as flexibility resources and associated unidirectional vehicle-to-grid benefits are investigated. Power can be scheduled with the EV charger in control of charging or via control by a utility or an aggregator. Charging cost functions suitable for charger- and utility-controlled power scheduling are presented. Ancillary service levels possible with unidirectional vehicle-to-grid are quantified using sample charging scenarios from published data. Impacts of various power schedules and vehicle participation as a flexibility resource on electricity locational prices are evaluated. These include benefits to both owners and load-serving entities.  Frequency regulation is considered in the context of unidirectional charging. ', '2017-03-03', 23487193452104, 'Sayeed Mohammad', '1519288009.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `phd`
--

CREATE TABLE `phd` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(50) NOT NULL,
  `uni_name` varchar(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `p_preview` text NOT NULL,
  `p_date` date NOT NULL,
  `r_idFK` bigint(14) NOT NULL,
  `super_name` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phd`
--

INSERT INTO `phd` (`p_id`, `p_title`, `uni_name`, `faculty_name`, `p_preview`, `p_date`, `r_idFK`, `super_name`, `file`) VALUES
(1, ' PATTERN RECOGNITION AS AN EMERGING TREND OF ARTIF', 'Stanford ', 'computer science', 'Pattern recognition is one of the well-known trait of artificial intelligence. Pattern recognition has become more and more famous and plays a pivotal role into IT field since 1960â€™s. This research paper introduces basic classification of pattern recognition algorithms as well as models and AMALGAMATION model which combine two or more traditional models to get the best result as output.  The final goal of pattern recognition is to build a machine which will act like a human being and can recognize all the pattern by using its algorithm at a faster pace just like a brain of human. ', '2016-02-02', 23487193452567, 'Sayeed Mohammad', '1519282688.pdf'),
(2, 'Cloud Computing Through Mobile-Learning ', 'Assiut', 'computer science', 'Cloud computing is the new technology that has various advantages and it is an adoptable technology in this present scenario. The main advantage of the cloud computing is that this technology reduces the cost effectiveness for the implementation of the Hardware, software and License for all. This is the better peak time to analyze the cloud and its implementation and better use it for the development of the quality and low cost education for all over the world. In this paper, we discuss how to influence on cloud computing and influence on this technology to take education to a wider mass of students over the country. We believe cloud computing will surely improve the current system of education and improve quality at an affordable cost. ', '2010-10-06', 23487193452567, 'Moheb Ramzy Girgis', '1519283313.pdf'),
(3, 'Learning Information Retrieval Agents: Experiments', 'Banha', 'FCI', 'The current exponential growth of the Internet precipitates a need for new tools to help people cope with the volume of information. To complement recent work on creating searchable indexes of the World-Wide Web and systems for filtering incoming e-mail and Usenet news articles, we describe a system which helps users keep abreast of new and interesting information. Every day it presents a selection of interesting web pages. The user evaluates each page, and given this feedback the system adapts and attempts to produce better pages the following day. We present some early results from an AI programming class to whom this was set as a project, and then describe our current implementation. Over the course of 24 days the output of our system was compared to both randomly-selected and human-selected pages. It consistently performed better than the random pages, and was better than the human-selected pages half of the time.\r\n', '1995-04-22', 29106282400121, 'Mohammed Ismail', '1519283573.pdf'),
(4, 'Remembrance Agent: A continuously running automate', 'South Valley', 'computer science', 'The Remembrance Agent (RA) is a program which augments human memory by displaying a list of documents which might be relevant to the userâ€™s current context. Unlike most information retrieval systems, the RA runs continuously without user intervention. Its unobtrusive interface allows a user to pursue or ignore the RAâ€™s suggestions as desired.\r\n', '1996-06-06', 23487193452146, 'Ahmed Ali Abdelalim', '1519284033.pdf'),
(5, 'A Model and Decision Procedure for Data Storage in', 'Mansoura', 'FCI', 'Cloud computing offers many possibilities for prospective users; there are however many different storage and compute services to choose from between all the cloud providers and their multiple datacenters. In this paper we focus on the problem of selecting the best storage services according to the application\'s requirements and the user\'s priorities. In previous work we described a capability based matching process that filters out any service that does not meet the requirements specified by the user. In this paper we introduce a mathematical model that takes this output lists of compatible storage services and constructs an integer linear programming problem. This ILP problem takes into account storage and compute cost as well as performance characteristics like latency, bandwidth, and job turnaround time; a solution to the problem yields an optimal assignment of datasets to storage services and of application runs to compute services. We show that with modern ILP solvers a reasonably sized problem can be solved in one second; even with an order of magnitude increase in cloud providers, number of datacenters, or storage services the problem instances can be solved under a minute. We finish our paper with two use cases, BLAST and MODIS. For MODIS our recommended data allocation leverages both cloud and local resources; it incurs in half the cost of a pure cloud solution and the job turnaround time is 52% faster compared to a pure local solution', '2016-05-23', 23487193452146, 'Abdelmgid Ali', '1519284293.pdf'),
(6, 'Artificial Intelligence in Knowledge-based     Tec', 'Minufiya', 'computer science', ' A modification of the paradigm of Artificial Intelligence (AI) is proposed in the paper. The modification is based on the assumption that there are algorithms which are inductive by construction, but can be mathematically proved. The content of traditional artificial intelligence concepts (knowledge, form of presentation, knowledge base, etc.) is determined within the proposed paradigm. The modification ensures unification of many concepts in the field of artificial intelligence. ', '2016-03-07', 29106282400121, 'Mohammed Kayed', '1519284480.pdf'),
(7, 'Text Analytics: the convergence of Big Data and Ar', 'Suez Canal', 'FCI', ' The analysis of the text content in emails, blogs, tweets, forums and other forms of textual communication constitutes what we call text analytics. Text analytics is applicable to most industries: it can help analyze millions of emails; you can analyze customersâ€™ comments and questions in forums; you can perform sentiment analysis using text analytics by measuring positive or negative perceptions of a company, brand, or product.  Text Analytics has also been called text mining, and is a subcategory of the Natural Language Processing (NLP) field, which is one of the founding branches of Artificial Intelligence, back in the 1950s, when an interest in understanding text originally developed. Currently Text Analytics is often considered as the next step in Big Data analysis. Text Analytics has a number of subdivisions: Information Extraction, Named Entity Recognition, Semantic Web annotated domainâ€™s representation, and many more. Several techniques are currently used and some of them have gained a lot of attention, such as Machine Learning, to show a semisupervised enhancement of systems, but they also present a number of limitations which make them not always the only or the best choice. We conclude with current and near future applications of Text Analytics', '2016-08-12', 29506058800449, 'Alhossiny Mohamed', '1519284639.pdf'),
(8, 'Usingâ€œTheMachineStopsâ€forTeachingEthicsinArtiï', 'cairo', 'FCI', 'A key front for ethical questions in artiï¬cial intelligence, and computersciencemoregenerally,isteachingstudentshowto engage with the questions they will face in their professional careersbasedonthetoolsandtechnologiesweteachthem.In past work (and current teaching) we have advocated for the useofscienceï¬ctionasanappropriatetoolwhichenablesAI researchers to engage students and the public on the current stateandpotentialimpactsofAI.Wepresentteachingsuggestions for E.M. Forsterâ€™s 1909 story, â€œThe Machine Stops,â€ to teachtopicsincomputerethics.Inparticular,weusethestory toexamineethicalissuesrelatedtobeingconstantlyavailable for remote contact, physically isolated, and dependent on a machine â€” all without mentioning computer games or other media to which students have strong emotional associations. Wegiveahigh-levelviewofcommonethicaltheoriesandindicate how they inform the questions raised by the story and aï¬€ord a structure for thinking about how to address them.\r\n', '2016-09-02', 29301142401494, 'Moheb Ramzy Girgis', '1519284831.pdf'),
(9, 'Secure Data Storage In Cloud Computing ', 'Port Said', 'computer science', 'Cloud computing has gained a lot of hype in the current world of I.T. Cloud computing is said to be the next big thing in the computer world after the internet. Cloud computing is the use of the Internet for the tasks performed on the computer and it is visualized as the next- generation architecture of IT Enterprise. The â€˜Cloudâ€™ represents the internet. Cloud computing is related to several technologies and the convergence of various technologies has emerged to be called cloud computing. In  comparison to conventional ways Cloud Computing  moves application  software  and  databases  to  the  large  data centers, where the  data  and  services will not  be fully trustworthy. In this article, I focus on secure data storage in cloud; it is an important aspect of Quality of Service. To ensure the correctness of usersâ€™ data in the cloud, I propose an effectual and adaptable scheme with salient qualities. This scheme achieves the data storage correctness, allow the authenticated  user to access the data and data error localization, i.e., the identification of misbehaving servers. ', '2011-01-02', 23487193452104, 'alaa abdel fattah', '1519285081.pdf'),
(10, 'BIOBIBLIOMETRICS: INFORMATION RETRIEVAL AND VISUAL', 'Tanta', 'FCI', 'Successful information retrieval from biomedical literature databases is becoming increasingly difficult.  We have developed a prototype system for retrieving and visualizing information from literature and genomic databases using gene names.  The premise of our work is that, if two genes have a related biological function, the co-occurrence of two gene names (or aliases of those genes) within the biomedical literature is more likely.  From a collection of Medline documents, we have extracted the number of co-occurrences of every pair of Saccharomyces cerevisiae genes.  The query is automatically conflated to include gene aliases as well.  In addition, the retrieved document set can be filtered by the user with a MeSH term.  From this co-occurrence data we construct a matrix that contains dissimilarity measurements of every pair of genes, based on their joint and individual occurrence statistics.  A graph is generated from this matrix, with node and edge inclusion being determined by a user-defined threshold. Nodes of the graph represent genes, while edge lengths are a function of the occurrence of the two genes within the literature. Nodes can be hypertext-linked to sequence databases, while edges are linked to those Medline documents that generated them. The system is a tool for efficiently exploring the biomedical information landscape and may act as a inference network', '2000-04-03', 29506058800449, 'Alhossiny Mohamed', '1519285262.pdf'),
(11, 'THE ETHICS OF ARTIFICIAL INTELLIGENCE ', 'Helwan', 'computer science', 'There are many ethical questions relating the issue of developing an intelligent system. There is strong and increasing pressure to raise capabilities of the artificial intelligence at least to the human levelled intelligence as the ultimate goal. This essay describes possible paths of development of the artificial intelligence. It is discussed how this changes will affect our society and challenges that humanity will have to face. Principles, guideways and modern viewpoints are presented and confirmed with the statements of the renowned scientists and experts in the field of the artificial intelligence ethics. ', '2016-07-05', 29106282400121, 'Eman Ahmed', '1519285421.pdf'),
(12, 'ARTIFICIAL INTELLIGENCE EDUCATION: EMOTIONAL COMPU', 'Zagazig', 'FCI', 'After decades of work towards making AI, some researchers are currently trying to form machines that are showing emotion intelligent. The quality definition of AI is that the ability for a machine to â€œthink or act humanly or rationallyâ€. The push towards showing emotion intelligent machines is an exciting addition to the current field. I will be able to give a survey of topics and resources for teaching emotional computation in AI courses. I will be able to show that this subject area is a wonderful application of recent AI techniques, and is a crucial side of recent analysis in AI. The knowledge base nature of work during this part isn\'t only compelling inside the classroom, it\'s going to conjointly result in wider interest within the field of computing', '2016-02-03', 23487193452104, 'essam abdel hady', '1519285561.pdf'),
(13, 'ARTIFICIAL INTELLIGENCE IN CYBER SECURITY ', 'Ain Shams', 'FCI', ' The speed of processes and also the quantity of knowledge to be utilized in defensive the cyber area cannot be handled by humans while not sizeable automation. However, it is troublesome to develop software system with standard mounted algorithms (hard-wired logic on deciding level) for effectively defensive against the dynamically evolving attacks in networks. This example may be handled by applying strategies of computing that offer flexibility and learning capability to software system. This paper presents a quick survey of computing applications in cyber security, and analyzes the prospects of enhancing the cyber security capabilities by suggests that of accelerating the intelligence of the security systems. Once measuring the papers obtainable regarding AI applications in cyber security, we will conclude that helpful applications exist already. They belong; initial of all, to applications of artificial neural nets in perimeter security and a few alternative cyber security areas. From the opposite facet â€“ it has become obvious that several cyber security issues may be resolved with success only strategies of AI are getting used. For instance, wide information usage is critical in deciding, and intelligent call support is one in all however unresolved issues in cyber security. ', '2016-05-05', 24090919912527, 'Fatima Azzam', '1519285711.pdf'),
(14, 'Energy Meter Tempering and Power Tapping Detection', 'Alexandria', 'FCI', ' For the effective energy management the distribution system has been improved day by day but the energy measurement and billing section does not improving in the present day which leads to lot of power theft cases. The existing method uses purely manpowered operation for calibration and detection of power theft which has lot of difficulties. This Paper limits such theft cases by using microcontroller and GSM technology which control and detects location of power theft from main control room. The method shown here is implementing an effective energy measurement with safety parameters which safeguard the energy meter, consumer loads and prevent the theft attempts. The illegal usage of electricity can be solved electronically by using SMS alert which reduces the processing time. By implementing this system large amount of electricity will be saved and it can be distributed to the more number of consumers than earlier.  ', '2017-05-06', 23487193452104, 'Omar Abdel-Rahman', '1519287039.pdf'),
(15, 'Effects on Power System Stability due to Integrati', 'Aswan', 'computer science', 'Power requirement is the most necessary requirement of the modern high power advanced technology. To fulfil this increased demand of power requirement, a new technology has been developed which is known as the Distributed Generation (DG). It uses renewable energy sources for the generation of electric power with little impact on the environment of the surrounding area at its site of construction, economical production, less exclusion of toxic sea wastes etc. however it also has some disadvantages. Under the study network of IEEE-14 bus network, the impact of connecting DG to the Distribution Network (DN) was studied. The simulation results shown indicate disturbances in the power system with the integration of distributed generation. ', '2017-07-04', 23487193452146, 'Sara Ahmed', '1519287285.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `researchers`
--

CREATE TABLE `researchers` (
  `r_id` bigint(14) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `uni_name` varchar(50) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_password` varchar(50) NOT NULL,
  `r_phone` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `admin` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `researchers`
--

INSERT INTO `researchers` (`r_id`, `r_name`, `uni_name`, `r_email`, `r_password`, `r_phone`, `active`, `admin`) VALUES
(23487193452104, 'walaa gamal', 'mansoura', 'walaa@yahoo.com', 'walaa12345', 1092364106, 0, 1),
(23487193452146, 'somya mohsen', 'minia', 'somya@yahoo.com', 'somya12345', 1030405060, 0, 1),
(23487193452567, 'ali ahmed', 'cairo', 'ali@yahoo.com', 'ali12345', 1002345678, 0, 1),
(24090919912527, 'ahmed hesham', 'monufia', 'ahmed@yahoo.com', 'ahmed12345', 1096423671, 0, 2),
(29106282400121, 'aya ahmed', 'alexandria', 'aya@yahoo.com', 'aya12345', 1092384056, 0, 2),
(29301142401494, 'mohammed omar', 'cairo', 'mohammed@yahoo.com', 'mohammed12345', 1092457394, 0, 1),
(29506058800449, 'nora raslan', 'minia', 'nora_raslan@outlook.com', 'nora12345', 1092345634, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `researches`
--

CREATE TABLE `researches` (
  `re_id` int(11) NOT NULL,
  `re_title` varchar(50) NOT NULL,
  `re_preview` text NOT NULL,
  `re_date` date NOT NULL,
  `magazine_name` varchar(50) NOT NULL,
  `r_idFK` bigint(14) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `researches`
--

INSERT INTO `researches` (`re_id`, `re_title`, `re_preview`, `re_date`, `magazine_name`, `r_idFK`, `file`) VALUES
(1, 'Modern Information Retrieval: A Brief Overview', 'For thousands of years people have realized the importance of archiving and finding information. With the advent of computers, it became possible to store large amounts of information; and finding useful information from such collections became a necessity. The field of Information Retrieval (IR) was born in the 1950s out of this necessity. Over the last forty years, the field has matured considerably. Several IR systems are used on an everyday basis by a wide variety of users. This article is a brief overview of the key advances in the field of Information Retrieval, and a description of where the state-of-the-art is at in the field.', '2001-01-17', 'IEEE', 23487193452104, '1519220339.pdf'),
(2, 'Securing Data Storage in Cloud Computing', 'Cloud computing is a new computing paradigm that attracted many computer users, business, and government agencies. Cloud computing brought a lot of advantages especially in ubiquitous services where everybody can access computer services through internet. With cloud computing, there is no need of physical hardware or servers that will support the companyâ€™s computer system, internet services and networks. One of the core services provided by cloud computing is data storage. In the past decades, data storage has been recognized as one of the main concerns of information technology. The benefits of network-based applications have led to the transition from server-attached storage to distributed storage. Based on the fact that data security is the foundation of information security, a great quantity of efforts has been made in the area of distributed storage security. In this paper, the authors tried to study the threats and attacks that possibly launch in cloud computing data storage and proposed a security mechanism.', '2012-05-09', 'Journal of Security Engineering', 23487193452104, '1519220652.pdf'),
(3, 'An Introduction to Steganography Techniques in the', 'Steganography is the process of art and science in such a way that no one apart from sender and intended recipient even realizes that the communication is going on. It is also used to authenticate the digital images. Steganography is categorized into spatial domain and frequency domain techniques. This paper presents a cryptography based technique to authenticate the images and can be used to prevent image forgery. While steganography has been around for centuries, the Digital Revolution has sparked a renewed interest in the field. This paper, however, focuses specifically on the techniques employed in hiding information in digital image files.', '2017-06-08', 'IJESC', 23487193452104, '1519220881.pdf'),
(4, 'Development of Artificial Intelligence Model for t', 'In machining operations, the extents of important effect of the process parameters like speed, feed, and depth of cut are different for different responses. This paper investigates the effect of process parameters in turning of AA6061 T6 on conventional lathe. The problem appeared owing to selection of parameters increases the deficiency of turning process. Modeling can facilitate the acquisition of a better understanding of such complex process, save the machining time and make the process economic. Thus, the present work clearly defines the development of an artificial neural network (ANN) model for predicting the material removal rate. This study presents a new method to prediction the material removal rate (MRR) on a lathe turning Process. Firstly, Process parameters namely, Spindle speed, depth of cut and feed rate are designed using the Box behnken (DOE) was employed as the experimental strategy. The result shows that the ANN model can predict the material removal rate effectively. This approach helps in economic lathe machining.', '2016-02-07', 'IJHIT', 23487193452104, '1519221081.pdf'),
(5, 'Finding Test Data with Specific Properties via Met', 'For software testing to be effective the test data should cover a large and diverse range of the possible input domain. Boltzmann samplers were recently introduced as a systematic method to randomly generate data with a range of sizes from combinatorial classes, and there are a number of automated testing frameworks that serve a similar purpose. However, size is only one of many possible properties that data generated for software testing should exhibit. For the testing of realistic software systems we also need to trade off between multiple different properties or search for specific instances of data that combine several properties. In this paper we propose a general search-based framework for finding test data with specific properties. In particular, we use a metaheuristic, differential evolution, to search for stochastic models for the data generator. Evaluation of the framework demonstrates that it is more general and flexible than existing solutions based on random sampling.', '2013-03-01', 'IEEE', 29506058800449, '1519221483.pdf'),
(6, 'Reliability and Security of Large Scale Data Stora', 'In this article, we will present new challenges to the large scale cloud computing, namely reliability and security. Recent progress in the research area will be briefly reviewed. It has been proved that it is impossible to satisfy consistency, availability, and partitioned-tolerance simultaneously. Tradeoff becomes crucial among these factors to choose a suitable data access model for a distributed storage system. In this article, new security issues will be addressed and potential solutions will be discussed.', '2010-12-17', 'IEEE', 29506058800449, '1519221760.pdf'),
(7, 'Realization of Test Paper Score Cumulating System ', 'In order to solve the problem of handwritten score cumulating in test papers, this paper studies the implementation of test paper score cumulating system based on digital image processing on MATLAB 7.0.8 (R2009a) programming platform. The whole experiment process includes image preprocessing, scoring place positioning and segmentation, character recognition based on artificial neural network and the summation of scores. The experimental results prove that the method is effective and accurate, and also shows that MATLAB is effective in the application of this method.', '2017-03-09', 'IJESC', 29506058800449, '1519222025.pdf'),
(8, 'The Effects of Artificial Intelligence and Robotic', 'This study presents new evidence on firmsâ€™ attitudes toward artificial intelligence (AI) and robotics, as well as their attitude toward the impacts of these new technologies on future business and employment prospects. The data used in this paper are the results of our original survey of more than 3,000 Japanese firms. The major findings can be summarized as follows. First, firms operating in the service industry have a positive attitude on the effects of AI-related technologies, suggesting the importance of paying attention to â€œAI-using industries.â€ Second, we observe complementarity between AI-related technologies and the skill level of employees. This finding suggests that in order to accelerate the development and diffusion of AI and to maintain employment opportunities, it will be necessary to upgrade human capital. Third, firms that engage in global markets tend to have a positive attitude toward the impacts of AI-related technologies, indicating that globalization of economic activities will facilitate the development and diffusion of these new technologies.', '2016-04-01', 'RIETI', 29506058800449, '1519222288.pdf'),
(9, 'Mapping the Interoperability Landscape for Network', 'Interoperability is a fundamental challenge for networked information discovery and retrieval. Often treated monolithically in the literature, interoperability is multifaceted and can be analyzed into different types and levels. This paper discusses an approach to map the interoperability landscape for networked information retrieval as part of an interoperability assessment research project.', '2001-06-28', 'ACM', 29301142401494, '1519222784.pdf'),
(10, 'Mobile Cloud Computing: A Comparison of Applicatio', 'Cloud computing is an emerging concept combining many fields of computing. The foundation of cloud computing is the delivery of services, software and processing capacity over the Internet, reducing cost, increasing storage, automating systems, decoupling of service delivery from underlying technology, and providing flexibility and mobility of information. However, the actual realization of these benefits is far from being achieved for mobile applications and open many new research questions. In order to better understand how to facilitate the building of mobile cloud-based applications, we have surveyed existing work in mobile computing through the prism of cloud computing principles. We give a definition of mobile cloud coputing and provide an overview of the results from this review, in particular, models of mobile cloud applications. We also highlight research challenges in the area of mobile cloud computing. We conclude with recommendations for how this better understanding of mobile cloud computing can help building more powerful mobile applications.', '2011-07-25', 'IEEE', 29301142401494, '1519223073.pdf'),
(11, 'Vehicle Detection from Satellite Images in Digital', 'Nowadays, a new agenda of extracting small scale objects as vehicles from high resolution satellite images have been evaluated. Less research is performed using high resolution satellite imagery as it is a challenging task. Though various studies have been performed, still there is a need to develop a fast, robust, and suitable approach. The approach described in this paper gives out the accuracy rate of vehicles captured from satellite images It simply workout the full numbers of vehicles within the desired space in the satellite image and vehicles are shown underneath the bounding box as a small spots.', '2017-02-09', 'IJCIR', 29301142401494, '1519223351.pdf'),
(12, 'A Systematic Performance Comparison of Artificial ', 'For transport planning and engineering systems, the Automated Licensed Number plate Recognition (ALNPR) can provide a valuable data source. From the different survey points the multiple tasks can be handled by ALNPR systems. The captured image of the vehicle licensed number plate, the registration number plate location and recognition can be analyzed by the Automated Licensed Number Plates based system. The parameters of the ALNPR systems are affected by the different problems observed while implementing this system by using techniques which are used for number plate detection and character recognition. The detection from the deviation between crossing vehicle and original vehicle number plate was examined. The detection rate cannot be emphasized because it depends on the variable factors like intensity and angle of the sun, low illumination situations, speed of vehicle, deformed or dirty number plates and shading on the characters of the number plate. The performance of the system can also be affected by detection rate of controllable factors like resolution of the camera, camera angle related to horizon, distance between the number plate and camera. Although by passing through all these problems, the authors gave the innovative criteria for the license plate recognition based on neural network, Fuzzy logic, Fourier transform, Genetic algorithms and wavelet theory.', '2016-01-12', 'IJCIR', 29106282400121, '1519223557.pdf'),
(13, 'Cross-Language Information Retrieval by Domain Res', 'In this paper, we propose a cross-language information retrieval (CLIR) method based on estimating for domains of the query using hierarchic structures of Web directories. To get the most appropriate translation of the queries, we utilize the Web directories written in many different languages as multilingual corpus for disambiguating translation of the query and for estimating the domain of search results using hierarchic structures of Web directories. From experimental evaluations, we found that there is an advantage in retrieval accuracy using our proposal for disambiguating translation in CLIR system. We found that it is effective to restrict to target fields of the query using lower level merged categories in order to acquire suited translation of the query.', '2008-12-10', 'IEEE', 29106282400121, '1519223708.pdf'),
(14, 'Data Dynamics for Storage Security and Public Audi', 'Cloud Computing has been envisioned as the next-generation architecture of IT Enterprise. It moves the application software and databases to the centralized large data centers, where the management of the data and services may not be fully trustworthy. The unique paradigm brings about many new security challenges, which have not been well understood. The work studies the problem of ensuring the integrity of data storage in Cloud Computing. In particular, consider the task of allowing a third party auditor (TPA), on behalf of the cloud client, to verify the integrity of the dynamic data stored in the cloud. The introduction of TPA eliminates the involvement of the client through the auditing of whether his data stored in the cloud is indeed intact, which can be important in achieving economies of scale for Cloud Computing. The support for data dynamics via the most general forms of data operation, such as block modification, insertion and deletion, is also a significant step toward practicality, since services in Cloud Computing are not limited to archive or backup data only. While prior works on ensuring remote data integrity often lacks the support of either public auditability or dynamic data operations, it achieves both. It first identify the difficulties and potential security problems of direct extensions with fully dynamic data updates from prior works and then show how to construct an elegant verification scheme for the seamless integration of these two salient features in the protocol design. In particular, to achieve efficient data dynamics, to improve the existing proof of storage models by manipulating the classic Merkle Hash Tree construction for block tag authentication. To support efficient handling of multiple auditing tasks, and further explore the technique of bilinear aggregate signature to extend the main result into a multi-user setting, where TPA can perform multiple auditing tasks simultaneously. Extensive security and performance analysis show that the proposed schemes are highly efficient and provably secure.', '2012-02-10', 'ijca', 24090919912527, '1519224344.pdf'),
(15, 'Lung cancer detection using digital Image processi', 'Lung cancer main disease cause of death of among throughout the world. Lung cancer is causing very high mortality rate. There are various cancer tumors such as lung cancer, breast Cancer, etc. Early stage detection of lung cancer is important for successful treatment. Diagnosis is based on Computed Tomography (CT ) images. In this Histogram Equalization used to preprocessing of the images and feature extraction process and classifier to check the condition of a patient in its early stage whether it is normal or abnormal.', '2016-04-04', 'IRJET', 24090919912527, '1519224521.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `master_idfk_1` (`r_idFK`);

--
-- Indexes for table `phd`
--
ALTER TABLE `phd`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `phd_idfk_1` (`r_idFK`);

--
-- Indexes for table `researchers`
--
ALTER TABLE `researchers`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `researches`
--
ALTER TABLE `researches`
  ADD PRIMARY KEY (`re_id`),
  ADD KEY `researches_idfk_1` (`r_idFK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `phd`
--
ALTER TABLE `phd`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `researches`
--
ALTER TABLE `researches`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master`
--
ALTER TABLE `master`
  ADD CONSTRAINT `master_idfk_1` FOREIGN KEY (`r_idFK`) REFERENCES `researchers` (`r_id`);

--
-- Constraints for table `phd`
--
ALTER TABLE `phd`
  ADD CONSTRAINT `phd_idfk_1` FOREIGN KEY (`r_idFK`) REFERENCES `researchers` (`r_id`);

--
-- Constraints for table `researches`
--
ALTER TABLE `researches`
  ADD CONSTRAINT `researches_idfk_1` FOREIGN KEY (`r_idFK`) REFERENCES `researchers` (`r_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
