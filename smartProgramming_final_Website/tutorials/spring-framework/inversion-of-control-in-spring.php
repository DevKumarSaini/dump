<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Java is high-level, object-oriented programming language. It is designed to be simple, object-oriented, and user-friendly, similar to languages like C and C++" />
    <meta name="keywords"
        content="java, introduction, high level language, programming language, object oriented language, developed, 1995, james Gosling, Java Standard Edition, Java SE, Java Enterprise Edition, Java EE, Java Micro Edition, Java ME, Deepak, Deepak Panwar" />

    <title>Inversion of Control (IoC)</title>

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
                    
                    <h3 class="text-center"> Inversion of Control (IoC) </h3>

                    <hr />

                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> What is Inversion of Control (IoC)? </h4>

                        <ul>
                            <li>
                                <strong>IoC is a "Design Principle"</strong> in which the control of object creation and management is transferred from the application code to a container or framework.
                            </li>
                            <li>
                                In traditional programming, the application is responsible for creating and managing its dependencies (objects). With IoC, the framework controls the creation, lifecycle, and dependencies of objects, promoting loose coupling between components.
                            </li>
                        </ul>
                    </section>

                    <hr class="mt-5"/>

                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> Use of Inversion of Control (IoC) </h4>
                        <i class="bi bi-arrow-return-right"></i> Below are some important uses of IoC :- <br/> <br/>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Loose Coupling : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Reduces dependencies between components, making the system easier to modify and maintain.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Dependency Injection : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    The container injects dependencies into objects, removing the need for hardcoding or manual lookup.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Configuration Flexibility : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Allows for flexible configuration through XML, annotations, or Java-based configuration.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Centralized Management : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Provides a centralized mechanism for managing the lifecycle of beans.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Code Reusability : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Promotes reusability by separating the business logic from dependency management.
                                </li>
                            </ul>
                        </p>
                        <p class="ms-2">
                            <span class="notes-sub-subheading"><i class="bi bi-arrow-right-short"></i> Improved Testing : </span>
                            <ul style="margin-top: -15px;">
                                <li>
                                    Components can be easily tested in isolation since dependencies are injected from the outside.
                                </li>
                            </ul>
                        </p>
                    </section>

                    <hr class="mt-5"/>

                    <section class="mt-5">
                        <h4 class="notes-heading"> <i class="bi bi-brightness-low-fill"></i> IoC Container </h4>
                        <ul>
                            <li>
                                IoC Container is a <strong>container that implements the Inversion of Control principle</strong>.
                            </li>
                            <li>
                                It manages the creation, configuration, and lifecycle of objects (beans) while handling their dependencies through techniques like Dependency Injection (DI).
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong>NOTE :</strong> Not tied to any specific framework or technology. Different frameworks can implement IoC principles in various ways.
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Some examples of IoC Container are :-
                                <ol>
                                    <li><a href="spring-container.php">Spring Container</a></li>
                                    <li>Google Guice</li>
                                    <li>PicoContainer</li>
                                    <li>Dagger</li>
                                </ol>
                            </li>
                        </ul>
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