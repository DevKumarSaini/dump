<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Java is high-level, object-oriented programming language. It is designed to be simple, object-oriented, and user-friendly, similar to languages like C and C++" />
    <meta name="keywords"
        content="java, introduction, high level language, programming language, object oriented language, developed, 1995, james Gosling, Java Standard Edition, Java SE, Java Enterprise Edition, Java EE, Java Micro Edition, Java ME, Deepak, Deepak Panwar" />

    <title>Spring Tutorials</title>

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
    <?php include 'navbar-spring.php'; ?>

    <div class="row">

        <?php include 'sidebar-spring-1.php'; ?>

        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">
                    
                    <h3 class="text-center"> Spring Introduction ? </h3>

                    <hr />

                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> What is Spring? </h4>

                        <ul>
                            <li>
                                Spring is a <strong>lightweight, open-source framework</strong> for building enterprise-level applications in <strong>Java</strong>.
                            </li>
                            <li>
                                It provides comprehensive infrastructure support, especially for Java-based applications, and helps developers manage complex applications with ease through features like dependency injection (DI) and aspect-oriented programming (AOP).
                            </li>
                        </ul>

                        <ul>
                            <li>
                                Spring was <strong>developed by "Rod Johnson"</strong> independently. But Later, <strong>Pivotal Software</strong> took over its development, which is now part of VMware.
                            </li>
                            <li>
                                First version of Spring was released in <strong>2003</strong> & First production release was in March, 2004
                            </li>
                        </ul>
                    </section>

                    <hr class="mt-5"/>

                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> Spring Version </h4>
                        <i class="bi bi-arrow-return-right"></i> Below are some key versions of Spring and their release years :- <br/> <br/>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring 1.x : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Released in March 2004 (first stable release)
                                </li>
                                <li>
                                    The initial release, laying the foundation for the framework.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring 2.x : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Released in 2006
                                </li>
                                <li>
                                    Introduced significant improvements, including support for Aspect-Oriented Programming (AOP) and declarative transactions.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring 3.x : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Released in 2009
                                </li>
                                <li>
                                    Focused on modernizing the framework with support for Java Configuration, RESTful web services, and more.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring 4.x : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Released in 2013
                                </li>
                                <li>
                                    Embraced Java 8 features, reactive programming, and WebSocket support.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring 5.x : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Released in 2017
                                </li>
                                <li>
                                    Built on a reactive foundation, providing a more efficient and scalable approach to application development.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring 6.x : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Released in 2022
                                </li>
                                <li>
                                    Leverages Java 17+ and Jakarta EE 9+, offering enhanced performance and modularity.
                                </li>
                            </ul>
                        </p>
                    </section>

                    <hr class="mt-5"/>

                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> Uses of Spring </h4>
                        <i class="bi bi-arrow-return-right"></i> Below are some uses of Spring :- <br/> <br/>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Dependency Injection : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Manages object dependencies, promoting loose coupling and testability.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Aspect-Oriented Programming (AOP) : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Enables modularization of cross-cutting concerns like logging, security, and transaction management.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Data Access : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Simplifies database interactions with support for JDBC, ORM frameworks (Hibernate, JPA), and NoSQL databases.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Web Application Development : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Provides a robust framework for building web applications, including RESTful services and web MVC.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Testing : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Offers testing utilities and integration with testing frameworks like JUnit and TestNG.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Security : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Provides a comprehensive security framework for authentication, authorization, and encryption.
                                </li>
                            </ul>
                        </p>
                        <p>
                            <strong> NOTE : </strong>
                            Spring is primarily used for software and web application development, enabling developers to build robust, maintainable, and scalable applications. It supports microservices, backend APIs, and enterprise solutions, along with features for testing, security, and database management.
                        </p>
                    </section>

                    <hr class="mt-5"/>

                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> Key Modules in Spring </h4>
                        <i class="bi bi-arrow-return-right"></i> Below is an overview of the key modules in Spring Framework :- <br/> <br/>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring Core Module : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    This module provides the foundation for the framework, including Inversion of Control (IoC) and Dependency Injection (DI) for managing application components.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring AOP (Aspect-Oriented Programming) Module : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    This module enables cross-cutting concerns like logging, security, and transaction management by separating these from the business logic.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring Data Module : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    This module provides tools to interact with relational and NoSQL databases, offering repositories for CRUD operations with minimal code.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring MVC Module : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    This module facilitates building web applications by providing a Model-View-Controller (MVC) architecture to separate concerns in development.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring Security Module : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    This module ensures secure applications by offering authentication, authorization, and protection against common vulnerabilities.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring Cloud Module : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    This module supports building microservices by offering solutions for configuration management, service discovery, and fault tolerance.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring Batch Module : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    This module provides infrastructure for batch processing tasks like reading large datasets, writing reports, or scheduling jobs.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Spring WebFlux Module : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    This module offers support for reactive programming, enabling non-blocking, event-driven applications for high scalability.
                                </li>
                            </ul>
                        </p>
                        <p>
                            <strong> NOTE : </strong>
                            Spring Boot is also a module of Spring Framework which Simplifies application setup by providing pre-configured components for quickly building and deploying Spring-based apps.
                        </p>
                    </section>
                </div>
            </div>

            <hr class="mt-2"/>

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
    <?php include 'footer-spring.php'; ?>

    <script src="../../assets/js/notes-hamburger.js"></script>

    <!-- Prism.js for Syntax Highlighting -->
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/components/prism-java.min.js"></script>
</body>

</html>