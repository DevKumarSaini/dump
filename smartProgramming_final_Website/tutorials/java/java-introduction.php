<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Java is high-level, object-oriented programming language. It is designed to be simple, object-oriented, and user-friendly, similar to languages like C and C++" />
    <meta name="keywords"
        content="java, introduction, high level language, programming language, object oriented language, developed, 1995, james Gosling, Java Standard Edition, Java SE, Java Enterprise Edition, Java EE, Java Micro Edition, Java ME, Deepak, Deepak Panwar" />

    <title>Java Introduction</title>

    <link rel="icon" href="images/favicon.png" type="image/png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/themes/prism.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/themes/prism-tomorrow.min.css" rel="stylesheet" />
</head>

<body>
    <!-- include top bar -->
    <?php include '../../top-bar.php'; ?>

    <!-- Navigation Bar -->
    <?php include 'navbar-java.php'; ?>

    <div class="row">
        
        <?php include 'sidebar-java-1.php'; ?>

        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">
                    
                    <h3 class="text-center"> What is Java ? </h3>

                    <hr />

                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> Java Introduction </h4>

                        <ul>
                            <li>
                                Java is <strong>high-level, object-oriented programming language</strong>. It is designed to be simple, object-oriented, and user-friendly, similar to languages like C and C++.
                            </li>
                            <li>
                                Java is also referred to as a <strong>platform</strong> because it provides a runtime environment that allows Java programs to run on any device or operating system that has the Java Virtual Machine (JVM) installed. This platform independence is achieved through the combination of the Java Runtime Environment (JRE) and the JVM.
                            </li>
                            <li class="mt-3">
                                Java was originally developed by <strong>James Gosling</strong> and his team of engineers at <strong>Sun Microsystems</strong>. Its development was started in June 1991 and first public version was released in 1996. In 2010, Oracle Corporation acquired Sun Microsystems, which made Oracle the owner of Java and its associated technologies. Since then, Oracle has been responsible for maintaining and advancing the Java platform.
                            </li>
                            <li>
                                The original name of Java was "Oak". James Gosling and his team initially named it after an oak tree that stood outside Gosling's office at Sun Microsystems. However, the name was later changed to Java in 1995 due to trademark issues. The name "Java" was inspired by the Java coffee from Indonesia, as coffee was considered a metaphor for energy and vitality.
                            </li>
                            <li class="mt-3">
                                Java code is written in human-readable form and saved with a .java file extension. This code is then compiled into bytecode by the Java compiler (javac), which is a lower-level, platform-neutral representation of the code. This bytecode is later executed by the Java Virtual Machine (JVM).
                            </li>
                        </ul>

                        <h5 class="notes-subheading ms-4">Java Program Example</h5>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="notes-sub-subheading">MainApp.java</h6>
                                <pre><code class="language-java">public class MainApp
{
    public static void main(String[] args)
    {
        System.out.println("Hello, World!");
    }
}</code></pre>
                            </div>
                        </div>

                    </section>

                    <hr class="mt-5"/>

                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> Types of Java Edition </h4>
                        <p class="ms-4">
                            <i class="bi bi-arrow-return-right"></i> There are total 5 editions in Java which are as below :- <br/>
                            &nbsp;&nbsp; 1. Java Standard Edition (Java SE) <br/>
                            &nbsp;&nbsp; 2. Java Enterprise Edition (Java EE) <br/>
                            &nbsp;&nbsp; 3. Java Micro Edition (Java ME) <br/>
                            &nbsp;&nbsp; 4. JavaFX <br/>
                            &nbsp;&nbsp; 5. Java Card <br/>
                        </p>

                        <p class="ms-4">
                            <i class="bi bi-arrow-return-right"></i> These are explained deeply in below....
                        </p>
                        <ul class="mt-3">
                            <li>
                                <h5 class="notes-subheading"> 1. Java Standard Edition (Java SE) </h5>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Introduction : </span> Java SE is the core edition of the Java platform and provides the foundational APIs and tools for general-purpose programming. It includes basic libraries for data structures, networking, I/O, and more.
                                </p>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Applications : </span>
                                    <ul style="margin-top: -15px;">
                                        <li>
                                            <strong>Desktop Applications : </strong>Java SE is used to create standalone desktop applications, such as productivity software, utilities, and games. Examples include IDEs like IntelliJ IDEA and software like Eclipse.
                                        </li>
                                        <li>
                                            <strong>Command-Line Tools :</strong> Java SE is also used for developing command-line tools and utilities that run on various operating systems.
                                        </li>
                                        <li>
                                            <strong>Small-to-Medium Size Application :</strong> Java SE is suitable for developing smaller-scale applications that don’t require the extensive features of Java EE.
                                        </li>
                                    </ul>
                                </p>
                            </li>
                        </ul>

                        <ul class="mt-3">
                            <li>
                                <h5 class="notes-subheading"> 2. Java Enterprise Edition (Java EE) </h5>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Introduction : </span> Java EE (now Jakarta EE) is designed for large-scale, distributed, and multi-tiered applications. It extends Java SE with additional libraries and APIs for enterprise-level development, including web services, component-based architecture, and database interaction.
                                </p>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Applications : </span>
                                    <ul style="margin-top: -15px;">
                                        <li>
                                            <strong>Web Applications :</strong> Java EE is used to build robust web applications using technologies like Servlets, JSP (JavaServer Pages), and JSF (JavaServer Faces). It supports frameworks like Spring and Hibernate.
                                        </li>
                                        <li>
                                            <strong>Enterprise Applications :</strong> Java EE is ideal for developing complex, scalable enterprise systems like ERP (Enterprise Resource Planning) and CRM (Customer Relationship Management) systems. 
                                        </li>
                                        <li>
                                            <strong>Web Services :</strong> Java EE supports the development of RESTful and SOAP-based web services that allow different systems to communicate over the web.
                                        </li>
                                        <li>
                                            <strong>E-Commerce Systems :</strong> Java EE is widely used to create large e-commerce platforms that require high availability, scalability, and security.
                                        </li>
                                    </ul>
                                </p>
                                <p class="para-note">
                                    <strong>Note:</strong> Java EE has been rebranded as Jakarta EE under the Eclipse Foundation. The shift is more about the organization managing the technology rather than the technology itself.
                                </p>
                            </li>
                        </ul>

                        <ul class="mt-3">
                            <li>
                                <h5 class="notes-subheading"> 3. Java Micro Edition (Java ME) </h5>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Introduction : </span> Java ME is a subset of Java SE designed for developing applications on resource-constrained devices like embedded systems, mobile phones, and IoT (Internet of Things) devices.
                                </p>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Applications : </span>
                                    <ul style="margin-top: -15px;">
                                        <li>
                                            <strong>Mobile Applications :</strong> Before the rise of Android, Java ME was the primary platform for developing mobile applications for feature phones and early smartphones.
                                        </li>
                                        <li>
                                            <strong>Embedded Systems : </strong> Java ME is used in embedded devices such as smart cards, GPS devices, and home automation systems.
                                        </li>
                                        <li>
                                            <strong>IoT Applications :</strong> Java ME provides a lightweight platform for IoT devices, enabling the development of applications that run on small, connected devices with limited processing power and memory.
                                        </li>
                                    </ul>
                                </p>
                            </li>
                        </ul>

                        <ul class="mt-3">
                            <li>
                                <h5 class="notes-subheading"> 4. JavaFX </h5>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Introduction : </span> JavaFX is a platform for building rich internet applications (RIAs) that can run on various devices. It provides a modern, hardware-accelerated user interface and is often used for creating visually appealing desktop applications.
                                </p>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Applications : </span>
                                    <ul style="margin-top: -15px;">
                                        <li>
                                            <strong>Rich Internet Applications (RIAs) :</strong> JavaFX is used to create interactive, visually rich applications that can run on the desktop, web, or embedded devices.
                                        </li>
                                        <li>
                                            <strong>Multimedia Applications :</strong> JavaFX is suitable for developing applications that require advanced graphics, media playback, and complex animations.
                                        </li>
                                        <li>
                                            <strong>Data Visualization Tools :</strong> JavaFX is often used in building tools that visualize complex data, such as charts, graphs, and simulations.
                                        </li>
                                    </ul>
                                </p>
                            </li>
                        </ul>

                        <ul class="mt-3">
                            <li>
                                <h5 class="notes-subheading"> 5. Java Card </h5>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Introduction : </span> Java Card is a specialized edition of the Java platform designed for secure, resource-constrained environments like smart cards and SIM cards. It enables small applications (applets) to run securely on devices with minimal memory and processing power, commonly used in industries requiring high security, such as banking, telecommunications, and government ID systems.
                                </p>
                                <p>
                                    <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Applications : </span>
                                    <ul style="margin-top: -15px;">
                                        <li>
                                            <strong>Smart Cards:</strong> Java Card is used in the development of applications for smart cards, including payment cards (credit/debit), identification cards, and access control systems. The technology enables secure storage of sensitive data like cryptographic keys and personal identification information.
                                        </li>
                                        <li>
                                            <strong>SIM Cards:</strong> Java Card powers SIM cards used in mobile phones. It allows telecom providers to securely manage and store subscriber information, including authentication keys and contact information. It also enables Over-the-Air (OTA) updates of applets and services on SIM cards.
                                        </li>
                                        <li>
                                            <strong>Secure Authentication:</strong> Java Card is used in devices that require strong authentication, such as hardware security tokens (e.g., for two-factor authentication), digital signatures, and encryption devices. The small, secure environment of Java Card makes it ideal for cryptographic operations and secure transaction processing.
                                        </li>
                                        <li>
                                            <strong>Contactless Payment Systems:</strong> Java Card is commonly employed in contactless payment systems such as NFC-based payment cards and mobile payment solutions. Its secure and lightweight environment ensures the protection of financial transactions.
                                        </li>
                                        <li>
                                            <strong>ePassports and ID Cards:</strong> Governments use Java Card technology to power ePassports and national ID cards. These cards securely store and manage biometric data and personal identification details to ensure security and privacy in identification and travel systems.
                                        </li>
                                    </ul>
                                </p>
                            </li>
                        </ul>
                    </section>

                    <hr class="mt-5"/>

                    <!-- section 3 : Application of java -->
                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> Application of java </h4>
                        <table class="table table-striped table-hover table-bordered mt-3">
                            <thead class="table-dark">
                                <tr>
                                    <th style="width: 20%">Application</th>
                                    <th style="width: 80%">Explanation</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td> <strong>Web Application</strong> </td>
                                    <td>Java is widely used for developing web applications, ranging from simple websites to complex enterprise-level applications. Java frameworks like Spring, Hibernate, and Struts are commonly used in the development process.</td>
                                </tr>
                                <tr>
                                    <td><strong>Enterprise Applications</strong></td>
                                    <td>Java is a dominant language in enterprise environments, used to build large-scale applications like ERP systems, CRM software, and supply chain management systems. Java EE (Jakarta EE) is specifically designed for these types of applications.</td>
                                </tr>
                                <tr>
                                    <td><strong>Mobile Applications</strong></td>
                                    <td>Java is the primary language for Android app development. The Android SDK (Software Development Kit) is based on Java, making it the go-to language for building mobile apps on the Android platform.</td>
                                </tr>
                                <tr>
                                    <td><strong>Desktop GUI Applications</strong></td>
                                    <td>Java can be used to create desktop applications with graphical user interfaces (GUIs) using frameworks like Swing and JavaFX. These applications can range from simple tools to complex software with rich features.</td>
                                </tr>
                                <tr>
                                    <td><strong>Scientific Applications</strong></td>
                                    <td>Java is often used in scientific applications for tasks like simulation, data analysis, and complex calculations. Its stability, portability, and performance make it suitable for scientific computing.</td>
                                </tr>
                                <tr>
                                    <td><strong>Big Data Technologies</strong></td>
                                    <td>Java plays a significant role in big data technologies. Apache Hadoop, Apache Kafka, and Apache Spark—major tools in the big data ecosystem—are all written in Java or have Java-based APIs, making it a crucial language for big data processing.</td>
                                </tr>
                                <tr>
                                    <td><strong>Cloud-Based Application</strong></td>
                                    <td>Java is commonly used for developing cloud-based applications and microservices. Its scalability, security, and cross-platform capabilities make it an ideal choice for cloud computing environments. </td>
                                </tr>
                                <tr>
                                    <td><strong>Internet of Things (IOT)</strong></td>
                                    <td>Java ME and Java SE are used in IoT applications, enabling the development of software for connected devices, smart sensors, and other IoT components.</td>
                                </tr>
                                <tr>
                                    <td><strong>Gaming</strong></td>
                                    <td>Java is used in game development, particularly for mobile games on Android and some desktop games. The LibGDX and jMonkeyEngine are popular Java-based game development frameworks.</td>
                                </tr>
                                <tr>
                                    <td><strong>Embedded Systems</strong></td>
                                    <td>Java is used in embedded systems, including devices like smart cards, network routers, and consumer electronics. Java’s portability and efficiency make it suitable for such constrained environments.</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>

            <hr class="mt-5"/>
            
            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                    
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="history-of-java-by-deepak-smart-programming.html" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

            <hr class="mb-5"/>

            <!-- notes feedback -->
            <?php include '../notes-feedback.php'; ?>

        </div>

        <div class="col-md-2 col-12 bg-secondary">this is for advertisement</div>

    </div>

    <!-- Footer -->
    <?php include 'footer-java.php'; ?>

    <script>
        document
            .getElementById("notes-hamburger-btn")
            .addEventListener("click", function () {
                document.getElementById("notes-sidebar").classList.toggle("active");
            });

        document
            .getElementById("notes-sidebar-close-btn")
            .addEventListener("click", function () {
                document.getElementById("notes-sidebar").classList.remove("active");
            });
    </script>

    <!-- Prism.js for Syntax Highlighting -->
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/components/prism-java.min.js"></script>
</body>

</html>