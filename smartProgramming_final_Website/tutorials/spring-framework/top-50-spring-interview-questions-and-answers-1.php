<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Java is high-level, object-oriented programming language. It is designed to be simple, object-oriented, and user-friendly, similar to languages like C and C++" />
    <meta name="keywords"
        content="java, introduction, high level language, programming language, object oriented language, developed, 1995, james Gosling, Java Standard Edition, Java SE, Java Enterprise Edition, Java EE, Java Micro Edition, Java ME, Deepak, Deepak Panwar" />

    <title>Top 50 Spring Boot Interview Questions & Answers</title>

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

        <?php include 'sidebar-spring-10.php'; ?>

        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">
                    
                    <h3 class="text-center"> Spring Interview Questions </h3>

                    <hr />
                    
                    <!-- -------- youtube video -----------
                    <section class="mt-5">
                        <div class="row video-container" onclick="window.open('https://www.youtube.com/watch?v=dQw4w9WgXcQ', '_blank')">

                            <div class="col-lg-3 col-md-4 col-sm-12 video-section">
                                <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" alt="Video Thumbnail" class="video-thumbnail"/>
                                <div class="play-button">
                                    <img src="https://cdn-icons-png.flaticon.com/512/727/727245.png" alt="Play Button" />
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-8 col-sm-12 text-section">
                                <h5>Click here to watch the video on YouTube!</h5>
                            </div>
                        </div>
                    </section>
                    -->

                    <section class="mt-5">
                        <div class="question-card">
                            <div class="question-title">
                              1. Why Spring & Spring Boot are important framework in java <br/> (as compared to Servlet, JSP & JSF) ?
                            </div>
                            <p class="answer-text">
                                <ul>
                                    <li>
                                        <strong>1. Modern Development Practices</strong><br/>
                                        <i class="bi bi-arrow-right"></i> Spring promotes Dependency Injection (DI) and Aspect-Oriented Programming (AOP), enabling cleaner, more modular, and testable code.<br/>
                                        <i class="bi bi-arrow-right"></i> JSP/Servlet/JSF applications tend to have tightly coupled components, making the code harder to maintain and test. (Hard-Coded Dependencies, Manual Dependency Management (Factory Pattern) etc)
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <strong>2. Reduced Boilerplate Code with Spring Boot</strong><br/>
                                        <i class="bi bi-arrow-right"></i> Spring Boot reduces configuration effort with auto-configuration, embedded servers, and starter dependencies, speeding up development. <br/>
                                        <i class="bi bi-arrow-right"></i> In contrast, Servlets and JSP require extensive manual setup, such as web.xml configurations and separate server setups.
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <strong>3. Microservices and Cloud-Native Applications</strong><br/>
                                        <i class="bi bi-arrow-right"></i> Spring Boot is designed with microservices architecture in mind, making it easy to build cloud-native and distributed systems. <br/>
                                        <i class="bi bi-arrow-right"></i> Older technologies like JSP/JSF were not intended for cloud or microservices use cases and struggle with scalability.
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <strong>4. Rich Ecosystem for Enterprise Needs</strong><br/>
                                        <i class="bi bi-arrow-right"></i> Spring offers additional frameworks like Spring Data, Spring Security, and Spring Cloud, which are essential for modern enterprise applications. <br/>
                                        <i class="bi bi-arrow-right"></i> JSP/Servlet/JSF lacks these advanced modules and requires more external tools or custom code for similar functionality.
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <strong>5. Easy Integration with Modern Tools and APIs</strong><br/>
                                        <i class="bi bi-arrow-right"></i> Spring integrates seamlessly with modern databases, REST APIs, and third-party libraries. <br/>
                                        <i class="bi bi-arrow-right"></i> Building REST APIs with Servlets or JSP/JSF is more tedious, involving a lot of boilerplate code.
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <strong>6. Lightweight and Scalable</strong><br/>
                                        <i class="bi bi-arrow-right"></i> Spring applications are lightweight and scalable, thanks to dependency injection and non-blocking I/O support (via Spring WebFlux). <br/>
                                        <i class="bi bi-arrow-right"></i> Servlets and JSP can be resource-heavy and less efficient for building high-performance applications.
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <strong>7. Separation of Concerns and Testability</strong><br/>
                                        <i class="bi bi-arrow-right"></i> Spring’s MVC pattern promotes better separation between the business logic, controller, and view, improving maintainability. <br/>
                                        <i class="bi bi-arrow-right"></i> JSP/JSF mixes logic with presentation, leading to harder-to-maintain code.
                                    </li>
                                </ul>
                            </p>
                          </div>

                          <div class="question-card">
                            <div class="question-title">
                                2. What is IoC in Spring and explain its use? <br/>
                            </div>
                            <p class="answer-text">
                                <ul>
                                    <li>
                                        <strong>IoC stands for Inversion of Control:</strong> IoC is a "Design Principle" or "Architectural Pattern" where, instead of our code controlling how objects (like services or components) are created and managed, this responsibility is handed over to a container (such as the Spring Framework).
                                    </li>
                                    <li>
                                        <strong>Think of it like this:</strong> If we’re throwing a party, instead of managing everything ourself (like buying food, setting up decorations, etc.), we hire a party planner. The planner (the IoC container) takes care of all the details while we focus on enjoying the party.
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        Use of IoC :-
                                        <ol>
                                            <li>
                                                <strong>Simplifies Code:</strong> We don’t have to worry about creating and managing objects manually. The IoC container handles that for us.
                                            </li>
                                            <li>
                                                <strong>Loose Coupling:</strong> It helps keep our code clean and modular. Different parts of our application can work independently, making it easier to change or test them without affecting other parts.
                                            </li>
                                            <li>
                                                <strong>Easier Testing:</strong> Since objects are managed by the container, we can easily swap out one object for another (like using a mock object for testing) without changing the code that uses it.
                                            </li>
                                            <li>
                                                <strong>Lifecycle Management:</strong> The container takes care of the lifecycle of objects (like when to create, initialize, or destroy them), so we don’t have to manage that complexity.
                                            </li>
                                        </ol>
                                    </li>
                                </ul>
                            </p>
                          </div>
                          <div class="question-card">
                            <div class="question-title">
                              3. What is IoC Container or Spring Container and Its types ?
                            </div>
                            <p class="answer-text">
                                <ul>
                                    <li>
                                        IoC Container or Spring Container is a specific implementation of the IoC "Design Principle"
                                    </li>
                                    <li>
                                        It takes the responsibility for:
                                        <ol>
                                            <li>
                                                Creating objects (beans)
                                            </li>
                                            <li>
                                                Managing dependencies between them
                                            </li>
                                            <li>
                                                Handling the lifecycle of these objects
                                            </li>
                                        </ol>
                                        <br/>
                                    </li>
                                    <li>
                                        IoC Container or Spring Container works as below:- <br/>
                                        The container reads configuration files (XML, annotations, or Java-based config) to:
                                        <ol>
                                            <li>
                                                Create beans (Java objects)
                                            </li>
                                            <li>
                                                Inject their dependencies
                                            </li>
                                            <li>
                                                Manage their lifecycle (like initialization and destruction)
                                            </li>
                                        </ol>
                                        <br/>
                                    </li>
                                    <li>
                                        There are 2 types of Spring Containers :-
                                        <ol>
                                            <li>
                                                "BeanFactory" Container
                                                <ul>
                                                    <li>
                                                        Lightweight and basic IoC container.
                                                    </li>
                                                    <li>
                                                        Only loads beans when they are requested (lazy initialization).
                                                    </li>
                                                    <li>
                                                        Suitable for simple applications where performance is crucial and resources are limited.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                "ApplicationContext" Container
                                                <ul>
                                                    <li>
                                                        A more advanced version of BeanFactory with extra features.
                                                    </li>
                                                    <li>
                                                        Eager initialization: Beans are created during container startup.
                                                    </li>
                                                    <li>
                                                        Suitable for Enterprise-level applications that require more features, such as transactions, events, and AOP.
                                                    </li>
                                                </ul>
                                            </li>
                                        </ol>
                                    </li>
                                </ul>
                            </p>
                          </div>

                          <div class="question-card">
                            <div class="question-title">
                                4. What are the responsibilities of IoC Container or Spring Container? <br/>
                            </div>
                            <p class="answer-text">
                                <ul>
                                    <li>
                                        Below are some responsibilities of IoC Container or Spring Container:-
                                        <ol>
                                            <li>
                                                <strong>Bean Creation:</strong> <br/>
                                                &nbsp; It instantiates objects defined as beans in the configuration file or annotations.
                                            </li>
                                            <li>
                                                <strong>Dependency Injection:</strong> <br/>
                                                <i class="bi bi-check"></i> It resolves and injects the dependencies required by a bean. <br/>
                                                <i class="bi bi-check"></i> Example: Injecting OrderService into UserService.
                                            </li>
                                            <li>
                                                <strong>Bean Configuration Management:</strong> <br/>
                                                It reads metadata (XML, annotations, or Java config) to manage the properties and behavior of beans.
                                            </li>
                                            <li>
                                                <strong>Lifecycle Management:</strong> <br/>
                                                It controls the entire lifecycle of a bean (instantiation, initialization, and destruction).
                                            </li>
                                            <li>
                                                <strong>Scope Management:</strong> <br/>
                                                It manages different bean scopes like singleton, prototype, session, etc.
                                            </li>
                                            <li>
                                                <strong>Event Handling:</strong> <br/>
                                                It supports event-based communication between beans (only in ApplicationContext).
                                            </li>
                                        </ol>
                                    </li>
                                </ul>
                            </p>
                          </div>

                          <div class="question-card">
                            <div class="question-title">
                                5. How to create IoC Container or Spring Container? <br/>
                            </div>
                            <p class="answer-text">
                                <ul>
                                    <li>
                                        We can create IoC Container or Spring Container by multiple ways:-<br/> <br/>
                                        <ol>
                                            <li>
                                                <strong>Using BeanFactory implementation i.e. XmlBeanFactory</strong><br/>
                                                <i class="bi bi-arrow-right"></i> Used when the XML configuration is in the classpath.
                                                <div class="card-body">
                                                    <pre><code class="language-java">BeanFactory factory = new XmlBeanFactory(new ClassPathResource("applicationContext.xml"));</code></pre>
                                                </div>
                                            </li>
                                            <li>
                                                <strong>Using ApplicationContext implementation i.e. ClassPathXmlApplicationContext:</strong><br/>
                                                <i class="bi bi-arrow-right"></i> Used when the XML configuration is in the classpath.
                                                <div class="card-body">
                                                    <pre><code class="language-java">ApplicationContext context = new ClassPathXmlApplicationContext("applicationContext.xml");</code></pre>
                                                </div>
                                            </li>
                                            <li>
                                                <strong>Using ApplicationContext implementation i.e. FileSystemXmlApplicationContext:</strong><br/>
                                                <i class="bi bi-arrow-right"></i> Used when the XML configuration is stored outside the classpath.
                                                <div class="card-body">
                                                    <pre><code class="language-java">ApplicationContext context = new FileSystemXmlApplicationContext("C:/config/applicationContext.xml");</code></pre>
                                                </div>
                                            </li>
                                            <li>
                                                <strong>Using ApplicationContext implementation i.e. AnnotationConfigApplicationContext:</strong><br/>
                                                <i class="bi bi-arrow-right"></i> Used When using Java-based configuration (recommended for modern apps).
                                                <div class="card-body">
                                                    <pre><code class="language-java">ApplicationContext context = new AnnotationConfigApplicationContext(AppConfig.class);</code></pre>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Some points to Remember :
                                        <ul>
                                            <li>
                                                For modern Spring applications, use AnnotationConfigApplicationContext because it promotes type safety and avoids cumbersome XML files.
                                            </li>
                                            <li>
                                                For legacy applications or when working with XML-based configurations, we can use ClassPathXmlApplicationContext or FileSystemXmlApplicationContext.
                                            </li>
                                            <li>
                                                For web applications, use WebApplicationContext integrated with a web framework like Spring MVC.
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </p>
                          </div>

                          <nav>
                            <ul class="pagination">
                              <li class="page-item active">
                                <a class="page-link" href="top-50-spring-interview-questions-and-answers-1.php">1</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="../../content-available-soon.php">2</a>
                              </li>
                            </ul>
                          </nav>
                          
                    </section>
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