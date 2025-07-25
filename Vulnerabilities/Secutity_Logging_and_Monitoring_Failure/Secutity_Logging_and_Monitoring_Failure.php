<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /Web-Nexus-Project/Login_Pages/login_page.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Logging and Monitoring Failures</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Highlight.js CSS for syntax highlighting -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/night-owl.min.css">

    <!-- Highlight.js script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            hljs.highlightAll();
        });
    </script>

</head>

<body class="bg-[#020617] font-['Lexend'] selection:text-yellow-400 cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_01.png'),_auto]">

    <!-- HEADER -->
    <nav class="fixed z-[999] top-0 left-0 h-[10vh] w-screen flex items-center justify-between p-4 bg-[#020617] border-b-2 border-[#3E4B5E] max-md:p-0">
        <div class="headerStuff flex items-center space-x-3 max-md:space-x-1">
            <img src="/Web-Nexus-Project/Assets/Images/logo.svg" alt="logo" class="w-12 max-md:w-8">
            <span class="text-2xl font-bold text-white font-['Press_Start_2P'] font-black drop-shadow-[5px_5px_0px_black] max-md:text-xs hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer]">Web-Nexus</span>
        </div>

        <div class="flex items-center justify-between space-x-10 max-md:space-x-4">
            <a href="/Web-Nexus-Project/Home/Home-Page.php#vulnerabilities" class="headerStuff hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs">Vulnerabilities</a>
            <a href="/Web-Nexus-Project/Home/Home-Page.php" class="headerStuff hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs max-md:hidden">Home</a>
            <a href="/Web-Nexus-Project/About Us/contact us.php" class="headerStuff hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs max-md:hidden">Contact Us</a>
        </div>

        <div class="hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] flex justify-center items-center">
            <div onclick="window.location.href='/Web-Nexus-Project/Login_Pages/logout.php'" class="yellowButton yellowButtonHeader hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer]">
                <div class="relative bg-yellow-300 hover:bg-yellow-600 px-3 py-2 mr-3 rounded-md border-3 border-[rgb(221,170,16)] transition-colors duration-500">
                    <div class="font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] text-black font-thin text-sm max-md:text-[8px]">
                        <a href="/Web-Nexus-Project/Login_Pages/logout.php">Log Out</a>
                    </div>
                    <div class="absolute w-[105%] h-[115%] bg-[rgb(221,170,16)] hover:bg-yellow-600 rounded-md transition-colors duration-500 -z-1 top-[1%] left-0"></div>
                </div>
            </div>
        </div>
    </nav>

    <!-- THUMBNAIL SECTION -->
    <div class="relative w-screen h-[60vh] mt-[10vh] overflow-hidden">
        <div class="absolute flex items-center justify-start h-full w-full z-10">

            <div class="flex flex-col items-start justify-center p-[10%] max-w-[52vw] max-md:max-w-full max-md:p-[5%]">

                <h1
                    class="thumbnail thumbnailTitle text-white text-3xl font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] font-['Press_Start_2P'] max-md:text-2xl mt-5 mb-2">
                    Security Logging
                </h1>
                <h1
                    class="thumbnail thumbnailTitle text-white text-3xl font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] font-['Press_Start_2P'] max-md:text-2xl mb-2">
                    and Monitoring
                </h1>
                <h1
                    class="thumbnail thumbnailTitle text-white text-3xl font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] font-['Press_Start_2P'] max-md:text-2xl">
                    Failures
                </h1>

                <div
                    class="thumbnail thumbnailDescription text-white text-md mt-[8%] font-semibold drop-shadow-[2px_2px_0px_black] drop-shadow-[-2px_-2px_0px_black] max-md:text-xs">
                    Security Logging and Monitoring Failures occur when applications lack proper systems to detect and
                    respond to security
                    breaches. This vulnerability allows attackers to operate undetected, exfiltrate data, and cause
                    damage without
                    triggering alerts. Effective logging and monitoring are essential for early threat detection and
                    minimizing the impact
                    of potential security incidents.
                </div>
                <div
                    class="yellowButton yellowButtonThumbnail hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] ">
                    <div
                        class="relative bg-yellow-300 hover:bg-yellow-600 px-3 py-2 rounded-md mt-7 border-3 border-[rgb(221,170,16)] transition-colors duration-500">

                        <div id="getStartedButton"
                            class=" font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-thin text-xs">
                            Get Started
                        </div>
                        <div
                            class="absolute w-[104%] h-[120%] bg-[rgb(221,170,16)] hover:bg-yellow-600 rounded-md  transition-colors duration-500 -z-1 top-[1%] left-0">
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <img src="/Web-Nexus-Project/Assets/Images/Insufficient-Logging.gif" class="absolute object-cover w-full h-full opacity-[0.6]"
            alt="">


    </div>

    <!-- DROPDOWN SECTION -->
    <div id="dropdownSection" class="w-full h-auto mt-[8vh] px-[10vw]">
        <div
            class="flex flex-col items-center justify-center w-full h-full border-3 border-[#3E4B5E] rounded-md p-[2%]">

            <!-- DROPDOWN 1 -->
            <details
                class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500">

                <summary
                    class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center rounded-md p-2">
                    <div
                        class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2">
                        1
                    </div>

                    <div class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm">
                        No Logging and Monitoring Page
                    </div>

                    <!-- DROPDOWN ARROW -->
                    <span
                        class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 25 24" fill="none"
                            class="transition-transform duration-400 origin-center">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z"
                                fill="#94A3B8"></path>
                        </svg>
                    </span>

                </summary>
                <div id="content1" class="p-10 flex items-center justify-start h-full  transition-all duration-500">

                    <div class="flex flex-row items-center justify-between space-x-10 py-10 ">

                        <div class="text-gray-400 max-w-[50%] p-5 text-xl max-sm:text-xs"><span
                                class="font-bold text-blue-300">Security Logging and Monitoring Failures</span> occur when applications lack adequate mechanisms to detect and respond to
                                suspicious activities or breaches. These failures include insufficient logging of critical security events, improper
                                storage of logs, absence of real-time monitoring, and inadequate alert systems. Without proper logging and monitoring,
                                attackers can remain undetected for extended periods—often over 200 days according to industry data—allowing them to
                                escalate privileges, extract sensitive information, and establish persistent access without triggering security alerts.</div>

                        <!-- BUTTON -->

                        <div onclick="window.location.href='vulnerable_page_Secutity_Logging_and_Monitoring_Failure.php'"
                            class="yellowButton yellowButtonVulnerable  hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] h-full py-10 w-full relative z-[100] max-w-[50%]">

                            <div class="z-[100] flex flex-row h-full w-full items-center justify-center px-3 py-2">

                                <img src="/Web-Nexus-Project/Assets/Images/playButton.png"
                                    class="z-[100] w-[20%] m-1 h-auto drop-shadow-[2px_2px_0px_rgb(221,170,16)]"
                                    alt="Image 1">

                                <div class="flex flex-col items-center justify-center">
                                    <div
                                        class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs">
                                        Simulate
                                    </div>
                                    <div
                                        class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs">
                                        Vulnerability
                                    </div>
                                </div>

                            </div>
                            <div
                                class="absolute w-full h-full  bg-yellow-300 hover:bg-yellow-600 border-3 border-[rgb(221,170,16)] rounded-xl  transition-colors duration-500 z-[1] top-0 left-0">
                            </div>
                            <div
                                class="absolute w-[100%] h-[100%] bg-[rgb(221,170,16)] hover:bg-yellow-600 transition-colors duration-500 rounded-xl z-[0] top-[2%] left-[0.7%]">
                            </div>

                        </div>




                    </div>

                    <!-- <p class="mt-2 text-gray-600">This is the hidden content that appears when you click.</p>
                    <button onclick="window.location.href='vulnerable_login.php'">vuln</button> -->
                </div>


                <!-- GIF -->
                <img src="/Web-Nexus-Project/Assets/Images/terminalAndRobo.gif" class="-mt-25" alt="giff">


                <div class="bulletPoints p-15">

                    <p class="bulletPointTitle text-[#93C5FD] text-2xl font-bold mb-10">The application might be
                        vulnerable if the application is:</p>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Failing to log critical security events such as login attempts, access control failures, or input validation errors.</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl font-['Lexend']">Not implementing real-time monitoring systems to detect and alert on suspicious activities.</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Using insufficient or improper log storage practices that allow attackers to modify or delete evidence.</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Missing audit trails for sensitive operations that could help identify malicious behavior.</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Failing to set appropriate alert thresholds that distinguish between normal and potentially malicious activities.</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Not integrating logging systems with security information and event management (SIEM) solutions.</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Lacking proper log protection mechanisms against unauthorized access or tampering.</p>

                    </div>

                </div>


            </details>

            <!-- DROPDOWN 2 -->
            <details
                class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500">

                <summary
                    class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center rounded-md p-2">
                    <div
                        class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2">
                        2
                    </div>

                    <div class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm">
                        Prevention Measures
                    </div>

                    <!-- DROPDOWN ARROW -->
                    <span
                        class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 25 24" fill="none"
                            class="transition-transform duration-400 origin-center">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z"
                                fill="#94A3B8"></path>
                        </svg>
                    </span>

                </summary>


                <div id="content2" class="p-20 h-full overflow-hidden transition-all duration-500">



                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">

                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Comprehensive Event Logging</p>

                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">

                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>

                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">

                        <code class=" rounded-md text-sm font-mono w-full h-full" >
function logSecurityEvent($eventType, $message, $severity, $userId = null) {
    $timestamp = date('Y-m-d H:i:s');
    $clientIP = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    
    // Format the log entry with all relevant details
    $logEntry = json_encode([
        'timestamp' => $timestamp,
        'event_type' => $eventType,
        'message' => $message,
        'severity' => $severity,
        'user_id' => $userId,
        'ip_address' => $clientIP,
        'user_agent' => $userAgent,
        'request_uri' => $_SERVER['REQUEST_URI']
    ]);
    
    // Write to secure log file with proper permissions
    error_log($logEntry . PHP_EOL, 3, '/var/log/security_events.log');
    
    // For high severity events, trigger immediate alert
    if ($severity === 'critical' || $severity === 'high') {
        triggerSecurityAlert($logEntry);
    }
}
                        </code>
                        </pre>
                    </div>


                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic">This code implements comprehensive security event logging that captures critical contextual information like timestamps,
                        event types, IP addresses, and user agents. It structures logs in JSON format for easier analysis and automatically
                        escalates high-severity events to an alert system, ensuring critical security incidents receive immediate attention.
                        </p>


                    </div>


                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">

                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Real-time Security Alerting</p>

                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">

                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>

                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">

                        <code class=" rounded-md text-sm font-mono w-full h-full" >
function triggerSecurityAlert($logData) {
    // Parse the log data
    $data = json_decode($logData, true);
    
    // Prepare alert message
    $alertMessage = "SECURITY ALERT: {$data['event_type']}\n" .
                    "Severity: {$data['severity']}\n" .
                    "Message: {$data['message']}\n" .
                    "User ID: {$data['user_id']}\n" .
                    "IP: {$data['ip_address']}\n" .
                    "Time: {$data['timestamp']}";
    
    // Send alert via multiple channels for redundancy
    mail('security@example.com', 'Security Alert', $alertMessage);
    
    // Log to SIEM system via API
    $curl = curl_init('https://siem.example.com/api/alerts');
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $logData);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_exec($curl);
    curl_close($curl);
}
                        </code>
                        </pre>
                    </div>


                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic">This code implements real-time security alerting by forwarding critical security events to responsible personnel via
                        email and integrating with Security Information and Event Management (SIEM) systems through API calls. It formats
                        detailed alert messages and ensures redundancy through multiple notification channels, enabling rapid response to
                        potential security incidents.</p>

                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">

                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Authentication Monitoring</p>

                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">

                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>

                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">

                        <code class=" rounded-md text-sm font-mono w-full h-full" >
function monitorAuthAttempts($username, $success, $ipAddress) {
    // Connect to database
    $db = new PDO('mysql:host=localhost;dbname=security_logs', 'user', 'password');
    
    // Record login attempt
    $stmt = $db->prepare('INSERT INTO auth_logs (username, success, ip_address, attempt_time) 
                            VALUES (:username, :success, :ip, NOW())');
    $stmt->execute([
        ':username' => $username,
        ':success' => $success ? 1 : 0,
        ':ip' => $ipAddress
    ]);
    
    // Check for brute force attempts
    if (!$success) {
        $stmt = $db->prepare('SELECT COUNT(*) FROM auth_logs
                                WHERE username = :username AND success = 0 
                                AND attempt_time > DATE_SUB(NOW(), INTERVAL 10 MINUTE)');
        $stmt->execute([':username' => $username]);
        $failCount = $stmt->fetchColumn();
        
        if ($failCount >= 5) {
            logSecurityEvent('brute_force_attempt',
                            "Multiple failed logins for user: $username", 
                            'high', $username);
        }
    }
}
                        </code>
                        </pre>
                    </div>


                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic">This code monitors authentication attempts by recording all login events in a database with timestamps and IP addresses.
                        It includes a brute force protection mechanism that detects multiple failed login attempts within a short time period
                        and triggers security alerts when suspicious patterns are detected, helping prevent unauthorized access attempts. </p>

                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">

                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Secure Log Storage</p>

                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">

                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>

                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">

                        <code class=" rounded-md text-sm font-mono w-full h-full" >
class SecureLogManager {
    private $logPath;
    private $encryptionKey;
    
    public function __construct($logPath, $encryptionKey) {
        $this->logPath = $logPath;
        $this->encryptionKey = $encryptionKey;
        
        // Ensure log directory exists with proper permissions
        if (!file_exists($logPath)) {
            mkdir($logPath, 0750, true);
        }
    }
    
    public function writeLog($logData) {
        $logFile = $this->logPath . '/security_' . date('Y-m-d') . '.log';
        $timestamp = microtime(true);
        $encryptedData = $this->encryptData(json_encode([
            'timestamp' => $timestamp,
            'data' => $logData,
            'hash' => hash('sha256', $timestamp . json_encode($logData) . $this->encryptionKey)
        ]));
        
        // Append to log with exclusive lock
        $fp = fopen($logFile, 'a');
        if (flock($fp, LOCK_EX)) {
            fwrite($fp, $encryptedData . PHP_EOL);
            flock($fp, LOCK_UN);
        }
        fclose($fp);
        
        // Set restrictive permissions
        chmod($logFile, 0440);
    }
    
    private function encryptData($data) {
        $iv = openssl_random_pseudo_bytes(16);
        $encrypted = openssl_encrypt($data, 'AES-256-CBC', $this->encryptionKey, 0, $iv);
        return base64_encode($iv . $encrypted);
    }
}
                        </code>
                        </pre>
                    </div>


                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic">This code implements secure log storage with tamper-evident mechanisms by encrypting log data and adding cryptographic
                        hashes to detect modifications. It maintains proper file permissions, uses file locks to prevent race conditions, and
                        rotates logs daily while ensuring logs are protected against unauthorized access or manipulation attempts.</p>

                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">

                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Anomaly Detection System</p>

                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">

                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>

                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">

                        <code class=" rounded-md text-sm font-mono w-full h-full" >
class AnomalyDetector {
    private $db;
    private $thresholds;
    
    public function __construct($dbConnection) {
        $this->db = $dbConnection;
        $this->thresholds = [
            'requests_per_minute' => 300,
            'error_rate' => 0.15,
            'new_ip_country' => true
        ];
    }
    
    public function analyze() {
        // Check request rate anomalies
        $this->checkRequestRate();
        
        // Check error rate anomalies
        $this->checkErrorRate();
        
        // Check geographical anomalies
        $this->checkGeographicalAnomalies();
    }
    
    private function checkRequestRate() {
        $stmt = $this->db->query("SELECT COUNT(*) / 60 as rpm FROM access_logs
                                    WHERE timestamp > DATE_SUB(NOW(), INTERVAL 1 MINUTE)");
        $rpm = $stmt->fetchColumn();
        
        if ($rpm > $this->thresholds['requests_per_minute']) {
            logSecurityEvent('traffic_anomaly',
                            "Unusual request rate detected: $rpm requests/min",
                            'medium');
        }
    }
    
    private function checkErrorRate() {
        // Similar implementation for error rate monitoring
    }
    
    private function checkGeographicalAnomalies() {
        // Implementation for detecting logins from unusual locations
    }
}
                        </code>
                        </pre>
                    </div>


                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic">This code implements an anomaly detection system that monitors various metrics including request rates, error rates, and
                        geographical access patterns. It establishes baseline thresholds for normal behavior and triggers alerts when deviations
                        occur, helping identify potential security incidents such as DDoS attacks, vulnerability scanning, or unauthorized
                        access from unusual locations.</p>

                    </div>

                </div>


            </details>



            <!-- DROPDOWN 3 -->

            <details id="dropdown3"
                class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500">

                <summary
                    class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center  rounded-md p-2">
                    <div
                        class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2">
                        3
                    </div>

                    <div class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm">
                        Secure Logging and Monitoring Page
                    </div>

                    <!-- DROPDOWN ARROW -->
                    <span
                        class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 25 24" fill="none"
                            class="transition-transform duration-400 origin-center">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z"
                                fill="#94A3B8"></path>
                        </svg>
                    </span>

                </summary>
                <div id="content3" class=" transition-all duration-500 p-20">

                    <!-- SPEECH BUBBLE -->
                    <div class="relative h-25">



                        <div
                            class="absolute bottom-0 left-0 translate-y-1/2 translate-x-[50%] rotate-45 w-16 h-16  border-3 rounded-md border-[#3E4B5E] bg-[#1E293B]">
                        </div>

                        <!-- SPEECH BUBBLE -->
                    <div class="relative h-25">
                        <div class="absolute bottom-0 left-0 translate-y-1/2 translate-x-[50%] rotate-45 w-16 h-16  border-3 rounded-md border-[#3E4B5E] bg-[#1E293B]"></div>
                        <div class="absolute p-5 text-white font-['Press_Start_2P'] text-xl font-thin  left-0 w-full h-full border-3 rounded-md border-[#3E4B5E] bg-[#1E293B]">
                            <p class="popupText popupText1 drop-shadow-[5px_5px_0px_#020617] max-md:text-xs">BEEP BEEP BOOP BOOP!</p>
                            <p class="popupText popupText2 drop-shadow-[5px_5px_0px_#020617] max-md:text-xs">Let's simulate the secure one now!</p>
                        </div>
                    </div>

                    </div>

                    <div class="flex items-center justify-between gap-12">

                        <!-- MASCOT -->

                        <img src="/Web-Nexus-Project/Assets/Images/mascot.gif" class="max-w-[50%] w-100 h-auto" alt="mascot">

                        <!-- BUTTON -->

                        <div onclick="window.location.href='secure_page_Secutity_Logging_and_Monitoring_Failure.php'"
                            class="yellowButton yellowButtonSecure hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer]  h-full py-10 w-full relative z-[100] max-w-[50%]">

                            <div class="z-[100] flex flex-row h-full w-full items-center justify-center px-3 py-2">

                                <img src="/Web-Nexus-Project/Assets/Images/playButton.png"
                                    class="z-[100] w-[20%] m-1 h-auto drop-shadow-[2px_2px_0px_rgb(221,170,16)]"
                                    alt="Image 1">

                                <div
                                    class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] flex flex-col items-center justify-center">
                                    <div
                                        class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs">
                                        Simulate
                                    </div>
                                    <div
                                        class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs">
                                        Secure Version
                                    </div>
                                </div>

                            </div>
                            <div
                                class="absolute w-full h-full  bg-yellow-300 hover:bg-yellow-600 border-3 border-[rgb(221,170,16)] rounded-xl  transition-colors duration-500 z-[1] top-0 left-0">
                            </div>
                            <div
                                class="absolute w-[100%] h-[100%] bg-[rgb(221,170,16)] hover:bg-yellow-600 transition-colors duration-500 rounded-xl z-[0] top-[2%] left-[0.7%]">
                            </div>

                        </div>


                    </div>

                </div>



                <!-- <marquee behavior="scroll" direction="left" scrollamount="10">
                    <img src="/Web-Nexus-Project/Assets/Images/Ronit-User1.JPG" class="w-40 h-40 inline-block mx-4" alt="Image 1">
                
                </marquee> -->
            </details>

        </div>
    </div>


    <footer class="bg-gray-950 text-white py-16 mt-16">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">
            <div>
                <img src="/Web-Nexus-Project/Assets/Images/logo.svg" alt="Web-Nexus Logo" class="w-24 mx-auto md:mx-0">
                <p class="mt-4 text-gray-400">Learn security the hands-on-way.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Company</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#"
                            class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">About
                            Us</a></li>
                    <li><a href="#"
                            class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Careers</a>
                    </li>
                    <li><a href="#"
                            class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Blog</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Support</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#"
                            class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Help
                            Center</a></li>
                    <li><a href="#"
                            class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Contact</a>
                    </li>
                    <li><a href="#"
                            class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">FAQs</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Follow Us</h3>
                <div class="mt-4 flex justify-center md:justify-start space-x-4">
                    <a href="#"
                        class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="/Web-Nexus-Project/Assets/Images/github.png" alt="Github" class="w-8">
                    </a>
                    <a href="#"
                        class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="/Web-Nexus-Project/Assets/Images/LinkedIn.jpg" alt="Linkedin" class="w-8">
                    </a>
                    <a href="#"
                        class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="/Web-Nexus-Project/Assets/Images/twitter.jpg" alt="Twitter" class="w-8">
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12 text-center text-gray-500">
            &copy; 2025 Web-Nexus. All Rights Reserved.
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js" integrity="sha512-f6bQMg6nkSRw/xfHw5BCbISe/dJjXrVGfz9BSDwhZtiErHwk7ifbmBEtF9vFW8UNIQPhV2uEFVyI/UHob9r7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js" integrity="sha512-AcqPGqrrAEtEwe+ADO5R8RbdFi7tuU7b/A2cJJH0Im0D18NRk5p5s4B3E5PMuO81KFw0ClN7J5SHVUJz7KOb0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/Web-Nexus-Project/Assets/Animations/vulnerabilityPageAnimation.js"></script>

</body>

</html>