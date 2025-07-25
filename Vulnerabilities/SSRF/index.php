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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Server-Side Request Forgery (SSRF)</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap"
      rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Highlight.js CSS for syntax highlighting -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/night-owl.min.css"
    />

    <!-- Highlight.js script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        hljs.highlightAll();
      });
    </script>
  </head>
  <body
    id="home" class="bg-[#020617] font-['Lexend'] selection:text-yellow-400 cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_01.png'),_auto]"
  >
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
        <div
          class="flex flex-col items-start justify-center p-[10%] max-w-[50vw] max-md:max-w-full max-md:p-[5%]"
        >
          <h1
            class="thumbnail thumbnailTitle text-white text-4xl font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] font-['Press_Start_2P'] max-md:text-2xl"
          >
            Server-Side
          </h1>
          <h7
            class="thumbnail thumbnailTitle text-white text-4xl font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] font-['Press_Start_2P'] max-md:text-2xl"
            >Request Forgery</h7
          >

          <div
            class="thumbnail thumbnailDescription text-white text-md mt-[10%] font-semibold drop-shadow-[2px_2px_0px_black] drop-shadow-[-2px_-2px_0px_black] max-md:text-xs"
          >
            SSRF (Server-Side Request Forgery) is a vulnerability where an
            attacker tricks a server into making unintended requests to internal
            or external systems. This happens when user input is used to fetch
            URLs without proper validation, allowing access to internal services
            or sensitive data.
          </div>

          <div
          id="getStartedButton" class="yellowButton yellowButtonThumbnail hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer]"
          >
            <div
              class="relative bg-yellow-300 hover:bg-yellow-600 px-3 py-2 rounded-md mt-10 border-3 border-[rgb(221,170,16)] transition-colors duration-500"
            >
              <div
                class="font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-thin text-xs"
              >
                Get Started
              </div>
              <div
                class="absolute w-[104%] h-[120%] bg-[rgb(221,170,16)] hover:bg-yellow-600 rounded-md transition-colors duration-500 -z-1 top-[1%] left-0"
              ></div>
            </div>
          </div>
        </div>
      </div>
      <img
        src="/Web-Nexus-Project/Assets/Images/Fish.gif"
        class="absolute object-cover w-full h-full opacity-[0.6]"
        alt=""
      />
    </div>

    <!-- DROPDOWN SECTION -->
    <div id="dropdownSection"class="w-full h-auto mt-[8vh] px-[10vw]">
      <div
        class="flex flex-col items-center justify-center w-full h-full border-3 border-[#3E4B5E] rounded-md p-[2%]"
      >
        <!-- DROPDOWN 1 -->
        <details
          class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500"
        >
          <summary
            class="hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center rounded-md p-2"
          >
            <div
              class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2"
            >
              1
            </div>

            <div
              class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm"
            >
              Vulnerable Page
            </div>

            <!-- DROPDOWN ARROW -->
            <span
              class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="48"
                viewBox="0 0 25 24"
                fill="none"
                class="transition-transform duration-400 origin-center"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z"
                  fill="#94A3B8"
                ></path>
              </svg>
            </span>
          </summary>
          <div
            id="content1"
            class="p-10 flex items-center justify-start h-full transition-all duration-500"
          >
            <div
              class="flex flex-row items-center justify-between space-x-10 py-10"
            >
              <div class="text-gray-400 max-w-[50%] p-5 text-xl max-sm:text-xs">
                <span class="font-bold text-blue-300"
                  >SSRF (Server-Side Request Forgery)</span
                >
                is a web security vulnerability where an attacker tricks a
                server into making unauthorized requests to internal or external
                systems. This usually happens when a web application accepts a
                URL or address as user input and uses it to fetch data—without
                properly validating it. Attackers can exploit this to access
                internal services (like localhost or cloud metadata endpoints),
                bypass firewalls, or even perform actions on behalf of the
                server, potentially leading to data exposure or further network
                compromise.
              </div>

              <!-- BUTTON -->

              <div
                onclick="window.location.href='ssrf_vulnerable.php'"
                class="yellowButton yellowButtonVulnerable hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] h-full py-10 w-full relative z-[100] max-w-[50%]"
              >
                <div
                  class="z-[100] flex flex-row h-full w-full items-center justify-center px-3 py-2"
                >
                  <img
                    src="/Web-Nexus-Project/Assets/Images/playButton.png"
                    class="z-[100] w-[20%] m-1 h-auto drop-shadow-[2px_2px_0px_rgb(221,170,16)]"
                    alt="Image 1"
                  />

                  <div class="flex flex-col items-center justify-center">
                    <div
                      class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs"
                    >
                      Simulate
                    </div>
                    <div
                      class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs"
                    >
                      Vulnerability
                    </div>
                  </div>
                </div>
                <div
                  class="absolute w-full h-full bg-yellow-300 hover:bg-yellow-600 border-3 border-[rgb(221,170,16)] rounded-xl transition-colors duration-500 z-[1] top-0 left-0"
                ></div>
                <div
                  class="absolute w-[100%] h-[100%] bg-[rgb(221,170,16)] hover:bg-yellow-600 transition-colors duration-500 rounded-xl z-[0] top-[2%] left-[0.7%]"
                ></div>
              </div>
            </div>

            <!-- <p class="mt-2 text-gray-600">This is the hidden content that appears when you click.</p>
                    <button onclick="window.location.href='vulnerable_login.php'">vuln</button> -->
          </div>

          <!-- GIF -->
          <img
            src="/Web-Nexus-Project/Assets/Images/terminalAndRobo.gif"
            class="-mt-25"
            alt="giff"
          />

          <div class="bulletPoints p-15">
            <p class="text-blue-300 text-2xl font-bold mb-10">
              The application might be vulnerable if it is:
            </p>

            <div
              class="flex flex-row items-start justify-start space-x-5 mb-[30px]"
            >
              <img
                class="diamond w-auto"
                src="/Web-Nexus-Project/Assets/Images/diamond.png"
                alt=""
              />

              <p class="text-gray-400 text-xl">
                User input is directly used in server-side HTTP requests without
                proper validation or sanitization.
              </p>
            </div>

            <div
              class="flex flex-row items-start justify-start space-x-5 mb-[30px]"
            >
              <img
                class="diamond w-auto"
                src="/Web-Nexus-Project/Assets/Images/diamond.png"
                alt=""
              />

              <p class="text-gray-400 text-xl font-['Lexend']">
                Lack of URL filtering, allowing requests to internal services
                like localhost, 127.0.0.1, or cloud metadata endpoints
              </p>
            </div>

            <div
              class="flex flex-row items-start justify-start space-x-5 mb-[30px]"
            >
              <img
                class="diamond w-auto"
                src="/Web-Nexus-Project/Assets/Images/diamond.png"
                alt=""
              />

              <p class="text-gray-400 text-xl">
                Use of unsafe functions like file_get_contents(), curl_exec(),
                or fsockopen() without restricting the destination.
              </p>
            </div>

            <div
              class="flex flex-row items-start justify-start space-x-5 mb-[30px]"
            >
              <img
                class="diamond w-auto"
                src="/Web-Nexus-Project/Assets/Images/diamond.png"
                alt=""
              />

              <p class="text-gray-400 text-xl">
                Parsing user-supplied XML or JSON that includes external
                references (can lead to SSRF through XXE)
              </p>
            </div>

            <div
              class="flex flex-row items-start justify-start space-x-5 mb-[30px]"
            >
              <img
                class="diamond w-auto"
                src="/Web-Nexus-Project/Assets/Images/diamond.png"
                alt=""
              />

              <p class="text-gray-400 text-xl">
                Open network access from the server, enabling it to reach
                internal or external IPs without restriction.
              </p>
            </div>

            <div
              class="flex flex-row items-start justify-start space-x-5 mb-[30px]"
            >
              <img
                class="diamond w-auto"
                src="/Web-Nexus-Project/Assets/Images/diamond.png"
                alt=""
              />

              <p class="text-gray-400 text-xl">
                Improper firewall or network segmentation, allowing access to
                sensitive internal services from the application server.
              </p>
            </div>

            <div
              class="flex flex-row items-start justify-start space-x-5 mb-[30px]"
            >
              <img
                class="diamond w-auto"
                src="/Web-Nexus-Project/Assets/Images/diamond.png"
                alt=""
              />

              <p class="text-gray-400 text-xl">
                No allowlist or blocklist mechanism, so the server fetches any
                URL the attacker supplies.
              </p>
            </div>
          </div>
        </details>

        <!-- DROPDOWN 2 -->
        <details
          class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500"
        >
          <summary
            class="hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center rounded-md p-2"
          >
            <div
              class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2"
            >
              2
            </div>

            <div
              class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm"
            >
              Prevention Measures
            </div>

            <!-- DROPDOWN ARROW -->
            <span
              class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="48"
                viewBox="0 0 25 24"
                fill="none"
                class="transition-transform duration-400 origin-center"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z"
                  fill="#94A3B8"
                ></path>
              </svg>
            </span>
          </summary>

          <div
            id="content2"
            class="p-20 h-full overflow-hidden transition-all duration-500"
          >
            <!-- WINDOW -->
            <div
              class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2"
            >
              <div class="flex items-center justify-between w-full">
                <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">
                  Validate User Input URL
                </p>

                <div
                  class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto"
                >
                  <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                  <div
                    class="bg-transparent border-4 border-[#0F172A] w-5 h-5"
                  ></div>
                  <div
                    class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"
                  ></div>
                </div>
              </div>

              <pre class="whitespace-pre-wrap flex items-center w-full h-full">
                        
                          <code class=" rounded-md text-sm font-mono w-full h-full" >
// Validate that the input is a proper HTTP/HTTPS URL
function isValidURL($url) {
  // Check if the input is a valid URL format and starts with http or https
  return filter_var($url, FILTER_VALIDATE_URL) &&
          in_array(parse_url($url, PHP_URL_SCHEME), ['http', 'https']);
}             
                          </code>
                        </pre>
            </div>

            <!-- ROBO WITH DESC -->
            <div
              class="flex flex-row items-start gap-2 justify-start mt-8 mb-20"
            >
              <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="" />

              <p class="preventionDescription mt-2 text-gray-600 italic">
                This function strictly checks that the user-supplied URL is
                valid and only uses http or https schemes. By blocking
                unsupported schemes like file:// or ftp://, it prevents misuse
                of the server to access local files or execute unintended
                protocols.
              </p>
            </div>

            <!-- WINDOW -->
            <div
              class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2"
            >
              <div class="flex items-center justify-between w-full">
                <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">
                  Prevent Access to Internal IP Addresses
                </p>

                <div
                  class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto"
                >
                  <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                  <div
                    class="bg-transparent border-4 border-[#0F172A] w-5 h-5"
                  ></div>
                  <div
                    class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"
                  ></div>
                </div>
              </div>

              <pre class="whitespace-pre-wrap flex items-center w-full h-full">
                        
                          <code class=" rounded-md text-sm font-mono w-full h-full" >
// Prevent access to internal/private IP addresses
function isSafeHost($url) {
  // Extract the host from the URL
  $host = parse_url($url, PHP_URL_HOST);

  // Resolve the host to its IP address
  $ip = gethostbyname($host);

  // Use regex to block internal/private IP ranges (localhost, 192.168.x.x, etc.)
  if (preg_match('/^(127\.|10\.|192\.168\.|169\.254\.|172\.(1[6-9]|2[0-9]|3[0-1])\.)/', $ip)) {
      return false; // Unsafe IP
  }
  return true; // Safe IP
}
                          </code>
                        </pre>
            </div>

            <!-- ROBO WITH DESC -->
            <div
              class="flex flex-row items-start gap-2 justify-start mt-8 mb-20"
            >
              <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="" />

              <p class="preventionDescription mt-2 text-gray-600 italic">
                This logic ensures that requests don’t reach internal services
                or network addresses. By resolving the hostname to an IP and
                checking against private ranges, it stops attackers from
                targeting local environments or metadata endpoints inside cloud
                infrastructure.
              </p>
            </div>

            <!-- WINDOW -->
            <div
              class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2"
            >
              <div class="flex items-center justify-between w-full">
                <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">
                  Set a Timeout and Disable Redirects
                </p>

                <div
                  class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto"
                >
                  <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                  <div
                    class="bg-transparent border-4 border-[#0F172A] w-5 h-5"
                  ></div>
                  <div
                    class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"
                  ></div>
                </div>
              </div>

              <pre class="whitespace-pre-wrap flex items-center w-full h-full">
                        
                          <code class=" rounded-md text-sm font-mono w-full h-full" >
// Add timeout and disable redirect to prevent abuse
function fetchWithTimeout($url) {
  // Create an HTTP context with a 3-second timeout and no redirect following
  $context = stream_context_create([
      'http' => [
          'timeout' => 3,            // 3-second timeout
          'follow_location' => false // Disable redirects
      ]
  ]);
  
  // Fetch the content using the configured context
  return @file_get_contents($url, false, $context);
}                           
                            
                          </code>
                        </pre>
            </div>

            <!-- ROBO WITH DESC -->
            <div
              class="flex flex-row items-start gap-2 justify-start mt-8 mb-20"
            >
              <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="" />

              <p class="preventionDescription mt-2 text-gray-600 italic">
                This function adds a layer of control by setting a timeout and
                disabling redirects during remote requests. A short timeout
                reduces the risk of resource exhaustion through slow or hanging
                requests. Disabling redirects helps prevent abuse via open
                redirect chains or redirecting to internal IPs.
              </p>
            </div>

            <!-- WINDOW -->
            <div
              class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2"
            >
              <div class="flex items-center justify-between w-full">
                <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">
                  Final Secure Fetch Wrapper
                </p>

                <div
                  class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto"
                >
                  <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                  <div
                    class="bg-transparent border-4 border-[#0F172A] w-5 h-5"
                  ></div>
                  <div
                    class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"
                  ></div>
                </div>
              </div>

              <pre class="whitespace-pre-wrap flex items-center w-full h-full">
                        
                          <code class=" rounded-md text-sm font-mono w-full h-full" >
// Final secure wrapper function to fetch external content safely
function safeFetch($url) {
  // Check if the URL format is valid
  if (!isValidURL($url)) {
      return "Invalid URL format.";
  }
         
  // Check if the host is safe and does not resolve to a private/internal IP
  if (!isSafeHost($url)) {
      return "Blocked: URL points to a restricted or internal address.";
  }
                          
  return fetchWithTimeout($url);
}                  

                          </code>
                        </pre>
            </div>

            <!-- ROBO WITH DESC -->
            <div
              class="flex flex-row items-start gap-2 justify-start mt-8 mb-20"
            >
              <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="" />

              <p class="preventionDescription mt-2 text-gray-600 italic">
                This function ties together all safeguards before executing any
                remote request from the backend. By combining URL validation, IP
                filtering, timeouts, and redirect control, it forms a robust
                defense against SSRF attacks. The server only fetches content
                from safe, well-validated, and externally hosted sources.
              </p>
            </div>
          </div>
        </details>

        <!-- DROPDOWN 3 -->

        <details
          id="dropdown3"
          class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500"
        >
          <summary
            class="hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center rounded-md p-2"
          >
            <div
              class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2"
            >
              3
            </div>

            <div
              class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm"
            >
              Secure Page
            </div>

            <!-- DROPDOWN ARROW -->
            <span
              class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="48"
                viewBox="0 0 25 24"
                fill="none"
                class="transition-transform duration-400 origin-center"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z"
                  fill="#94A3B8"
                ></path>
              </svg>
            </span>
          </summary>
          <div id="content3" class="transition-all duration-500 p-20">
            <!-- SPEECH BUBBLE -->
            <div class="relative h-25">
              <div
                class="absolute bottom-0 left-0 translate-y-1/2 translate-x-[50%] rotate-45 w-16 h-16 border-3 rounded-md border-[#3E4B5E] bg-[#1E293B]"
              ></div>

              <div
                class="absolute p-5 text-white font-['Press_Start_2P'] text-xl font-thin left-0 w-full h-full border-3 rounded-md border-[#3E4B5E] bg-[#1E293B]"
              >
                <p
                  class="popupText popupText1 drop-shadow-[5px_5px_0px_#020617] max-md:text-xs"
                >
                  BEEP BEEP BOOP BOOP!
                </p>
                <p
                  class="popupText popupText2 drop-shadow-[5px_5px_0px_#020617] max-md:text-xs"
                >
                  Let's simulate the secure one now!
                </p>
              </div>
            </div>

            <div class="flex items-center justify-between gap-12">
              <!-- MASCOT -->

              <img
                src="/Web-Nexus-Project/Assets/Images/mascot.gif"
                class="max-w-[50%] w-100 h-auto"
                alt="mascot"
              />

              <!-- BUTTON -->

              <div
                onclick="window.location.href='ssrf_secure.php'"
                class="yellowButton yellowButtonSecure hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] h-full py-10 w-full relative z-[100] max-w-[50%]"
              >
                <div
                  class="z-[100] flex flex-row h-full w-full items-center justify-center px-3 py-2"
                >
                  <img
                    src="/Web-Nexus-Project/Assets/Images/playButton.png"
                    class="z-[100] w-[20%] m-1 h-auto drop-shadow-[2px_2px_0px_rgb(221,170,16)]"
                    alt="Image 1"
                  />

                  <div
                    class="hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] flex flex-col items-center justify-center"
                  >
                    <div
                      class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs"
                    >
                      Simulate
                    </div>
                    <div
                      class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs"
                    >
                      Secure Version
                    </div>
                  </div>
                </div>
                <div
                  class="absolute w-full h-full bg-yellow-300 hover:bg-yellow-600 border-3 border-[rgb(221,170,16)] rounded-xl transition-colors duration-500 z-[1] top-0 left-0"
                ></div>
                <div
                  class="absolute w-[100%] h-[100%] bg-[rgb(221,170,16)] hover:bg-yellow-600 transition-colors duration-500 rounded-xl z-[0] top-[2%] left-[0.7%]"
                ></div>
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
                    <li><a href="/Web-Nexus-Project/About Us/contact us.php" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">About Us</a></li>
                    <li><a href="#home" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Careers</a></li>
                    <li><a href="#home" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Blog</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Support</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#home" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Help Center</a></li>
                    <li><a href="/Web-Nexus-Project/About Us/contact us.php" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Contact</a></li>
                    <li><a href="#home" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Follow Us</h3>
                <div class="mt-4 flex justify-center md:justify-start space-x-4">
                    <a href="#" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="/Web-Nexus-Project/Assets/Images/github.png" alt="Github" class="w-8">
                    </a>
                    <a href="#" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="/Web-Nexus-Project/Assets/Images/LinkedIn.jpg" alt="Linkedin" class="w-8">
                    </a>
                    <a href="#" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
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
