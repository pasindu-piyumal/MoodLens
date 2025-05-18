<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Rounded" rel="stylesheet">

</head>
<body>
    
<div class="banner">
    <div class="navbar">
        <div class="logo">SocialMoodLens</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#featuresSection">Features</a></li>
            <li><a href="">Contact</a></li>
            <?php
            if (isset($_SESSION["username"])) {
                echo '<li><a href="includes/logout.inc.php">Logout</a></li>';
                echo '<li><span class="user"><a href=""><a href="profile.php">' . htmlspecialchars($_SESSION["username"]) . '</a> </span></li>';
            } else {
                echo '<li><a href="login.php">Login</a></li>';  
            }
            ?>
        </ul>
    </div>

    <div class="content">
        <h1><span class="head-part1">DECODE YOUR</span> <span class="head-part2">MOOD</span>, EMPOWER YOUR STUDY</h1>
        <p>Struggling to balance social media and studying? <br> Discover how your online activity affects your focus and mood. <br> Our cutting-edge analyzer provides insights into your study habits and emotional patterns to help you succeed academically and maintain a positive mindset.</p>
        <div class="button-log">
            <button type="button"><a href="login.php"><span></span>LOGIN</a></button>
            <button type="button"><a href="signup.php"><span></span>SIGN UP</a></button>
        </div>
    </div>
</div>


    <div class="carousel">
        <div class="list">
            <div class="item">
                <img class="img1" src="assets/images/youtube copy.png">
                <div class="introduce">
                    <div class="title">SOCIAL MEDIAS FOR STUDIES</div>
                    <div class="topic">YouTube</div>
                    <div class="des">
                        YouTube is a globally popular online video-sharing and social media platform founded on February 14, 2005, and currently owned by Google. It allows users to upload, share, and view videos.
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">YouTube</div>
                    <div class="des">
                        YouTube for Studies is a versatile platform for students to enhance learning through video-based resources. It offers tutorials, lectures, and how-to guides on various subjects, making complex topics accessible with visual explanations. Students can use it for exam preparation, skill development, and homework help. YouTube also supports language learning, test prep, and career guidance, catering to learners of all levels. With interactive content and a vast library of educational videos, it serves as a valuable tool for academic and personal growth.
                    </div>
                    <div class="checkout">
                        <button><a href="https://play.google.com/store/apps/details?id=com.google.android.youtube&hl=en&pli=1">DOWNLOAD FOR ANDROID</a></button>
                        <button><a href="https://apps.apple.com/us/app/youtube-watch-listen-stream/id544007664">DOWNLOAD FOR IOS</a></button>
                        <button><a href="https://www.youtube.com/">VISIT</a></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="img2" src="assets/images/img2.png">
                <div class="introduce">
                    <div class="title">SOCIAL MEDIAS FOR STUDIES</div>
                    <div class="topic">Instagram</div>
                    <div class="des">
                        Instagram is a widely used social media platform focused on photo and video sharing. It was launched in 2010 and is now owned by Meta Platforms (formerly Facebook). It enables users to connect, share, and engage through visually driven content.
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">Instagram</div>
                    <div class="des">
                        Instagram for Studies offers a unique way for students to enhance their learning through engaging and visual content. By following educational accounts, participating in study communities, and exploring hashtags like #StudyGram, students can access study tips, tutorials, and productivity hacks. Features like Reels, Stories, and Live Sessions make it easy to learn complex topics, join webinars, and collaborate with peers. Instagram also serves as a platform for skill-building, motivation, and staying updated on scholarships and career opportunities, making it a versatile tool for academic growth.
                    </div>
                    <div class="checkout">
                        <button><a href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=en">DOWNLOAD FOR ANDROID</a></button>
                        <button><a href="https://apps.apple.com/us/app/instagram/id389801252">DOWNLOAD FOR IOS</a></button>
                        <button><a href="https://www.instagram.com/">VISIT</a></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="img3" src="assets/images/img3 (2).png">
                <div class="introduce">
                    <div class="title">SOCIAL MEDIAS FOR STUDIES</div>
                    <div class="topic">Facebook</div>
                    <div class="des">
                        Facebook, launched in 2004 by Mark Zuckerberg and his team, is one of the world’s largest social media platforms. Owned by Meta Platforms, it connects people globally by enabling communication, content sharing, and community building.
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">Facebook</div>
                    <div class="des">
                        Facebook for Studies is a practical platform for students to connect, collaborate, and access educational resources. Through features like Groups, students can join communities to share study materials, discuss topics, and collaborate on projects. Events help students discover webinars, workshops, and academic meetups, while Pages offer access to tutorials, study tips, and educational content. With tools like Messenger for group chats and Facebook Watch for learning videos, Facebook becomes a hub for online study communities, networking, and skill development, supporting both academic and personal growth.
                    </div>
                    <div class="checkout">
                        <button><a href="https://play.google.com/store/apps/details?id=com.facebook.katana&hl=en">DOWNLOAD FOR ANDROID</a></button>
                        <button><a href="https://apps.apple.com/us/app/facebook/id284882215">DOWNLOAD FOR IOS</a></button>
                        <button><a href="https://www.facebook.com/">VISIT</a></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="img4" src="assets/images/img4 (2).png">
                <div class="introduce">
                    <div class="title">SOCIAL MEDIAS FOR STUDIES</div>
                    <div class="topic">WhatsApp</div>
                    <div class="des">
                        WhatsApp is a free, cross-platform messaging app launched in 2009 and owned by Meta Platforms (formerly Facebook). It enables instant communication through text, voice, and video, making it one of the most popular messaging platforms worldwide.
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">WhatsApp</div>
                    <div class="des">
                        WhatsApp for Studies is a versatile tool that facilitates seamless communication and collaboration among students. Its features like group chats enable class discussions, resource sharing, and project collaborations. Students can share notes, documents, and multimedia via file sharing, while voice and video calls support virtual study sessions and peer tutoring. Tools like broadcast lists and status updates help streamline communication and reminders. WhatsApp Communities allow students to manage multiple groups under one umbrella, making it an effective platform for study planning, collaborative learning, and academic organization.
                    </div>
                    
                    <div class="checkout">
                        <button><a href="https://play.google.com/store/apps/details?id=com.whatsapp&hl=en">DOWNLOAD FOR ANDROID</a></button>
                        <button><a href="https://apps.apple.com/us/app/whatsapp-messenger/id310633997">DOWNLOAD FOR IOS</a></button>
                        <button><a href="https://web.whatsapp.com/">VISIT</a></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="img5" src="assets/images/img5 (2).png">
                <div class="introduce">
                    <div class="title">SOCIAL MEDIAS FOR STUDIES</div>
                    <div class="topic">TikTok</div>
                    <div class="des">
                        TikTok is a short-form video-sharing platform launched in 2016 by ByteDance. It allows users to create, share, and discover videos ranging from 15 seconds to 10 minutes. Known for its vibrant and dynamic content, TikTok is a hub for creativity, entertainment, and education, with a focus on trends, challenges, and storytelling.
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">TikTok</div>
                    <div class="des">
                        TikTok for Studies leverages short-form video content to make learning engaging and accessible for students. Through educational hashtags like #LearnOnTikTok and #StudyTips, users can explore quick tutorials, study hacks, and motivational content. TikTok’s creative features, such as Duets and Stitches, allow for collaborative learning and sharing of knowledge. Students can access bite-sized lessons on topics like science, math, and language learning, or even join live sessions hosted by educators. With its global reach and interactive platform, TikTok serves as a dynamic tool for skill-building, exam preparation, and fostering a vibrant educational community.
                    </div>
                    <div class="checkout">
                        <button><a href="https://play.google.com/store/apps/details?id=com.zhiliaoapp.musically&hl=en">DOWNLOAD FOR ANDROID</a></button>
                        <button><a href="https://apps.apple.com/us/app/tiktok/id835599320">DOWNLOAD FOR IOS</a></button>
                        <button><a href="https://www.tiktok.com/en/">VISIT</a></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="img6" src="assets/images/img6 (2).png">
                <div class="introduce">
                    <div class="title">SOCIAL MEDIAS FOR STUDIES</div>
                    <div class="topic">Telegram</div>
                    <div class="des">
                        Telegram is a cloud-based instant messaging platform launched in 2013 by Pavel Durov. Known for its focus on speed, security, and versatility, Telegram offers a range of features for messaging, file sharing, and community building. It is widely used for personal communication, professional collaboration, and content sharing.
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">Telegram</div>
                    <div class="des">    
                        Telegram for Studies provides a versatile platform for students and educators to collaborate, share resources, and stay organized. With groups and supergroups, students can engage in discussions, share notes, and solve problems collectively. Channels offer access to educational content, announcements, and updates from institutions or educators. The ability to share large files ensures seamless exchange of PDFs, e-books, and multimedia materials. Features like polls, quizzes, and bots make learning interactive and engaging. Telegram’s voice and video chats support virtual study sessions and live lectures, while unlimited cloud storage allows students to access materials across devices, fostering efficient and accessible learning.
                    </div>
                    <div class="checkout">
                        <button><a href="https://play.google.com/store/apps/details?id=org.telegram.messenger&hl=en">DOWNLOAD FOR ANDROID</a></button>
                        <button><a href="https://apps.apple.com/us/app/telegram-messenger/id686449807">DOWNLOAD FOR IOS</a></button>
                        <button><a href="https://web.telegram.org/a/">VISIT</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
            <button id="back">See All  &#8599</button>
        </div>
        
    </div>
    
    <div class="features" id="featuresSection">
        <div class="list">
            <div class="title">
                Features
            </div>
            <div class="analyzer">
                Study Mood Analyzer
            </div>
            <p>Discover how your emotional state evolves with our Mood Analyzer, which combines data from your social media usage and study schedule. By evaluating the time spent online and the structure of your study routine, the tool reveals patterns in how these activities influence your mood, focus, and overall productivity. It provides detailed insights, such as whether heavy social media use impacts your ability to concentrate or if certain study habits improve your emotional balance. With this understanding, you can make informed changes to optimize both your mood and academic performance.</p>
            <div class="buttons">
                <button><a href="login.php"><span></span>Analyze Your Mood Now!</a></button>
                
                <div class="container">
                    <button id="showdetailsbtn" class="button"><span></span>Learn How It Works.</button>
                </div>
            </div>
            <div id="detailsPanel" class="details hidden">
                <h2>How to Use</h2>
                <ul>
                    <li>Click the following ' <a href="#">Analyze Your Mood Now!</a> ' button</li>
                    <li>Then you will go to the Mood Analyzer</li>
                    <li>Select Social Media Platforms that you are using</li>
                    <li>Input the time that you have used each Social Media Platform</li>
                    <li>Input the time that how long you studied</li>
                    <li>Click the 'Analyze Your Mood' button</li>
                    <li>Then you can analyze your study mood</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="timer">
        <div class="timer-list">
            <div class="title">
                Pomodoro Timer
            </div>
            <div class="description">
                Uncover how your emotional state evolves with our Mood Analyzer, which combines data from your social media usage and study schedule. By evaluating the time spent online and the structure of your study routine, the tool reveals patterns in how these activities influence your mood, focus, and overall productivity. To help you stay on track, our integrated Pomodoro Timer allows you to break your study sessions into manageable intervals, ensuring sustained focus and preventing burnout. With detailed insights and productivity tools like the Pomodoro Timer, you can optimize your study habits, mood, and academic performance effectively.
            </div>
            <div class="button">
                <button ><a href="login.php"><span></span>Start</a></button>
            </div>
            
        </div>
    </div>
    <div class="aboutus">
        <div class="about-content">
            <div class="title">
                About Us
            </div>
            <div class="about-me">
                <h1>Who I am</h1>
                <img src="assets/images/mood.png" alt="image-responsive" class="image-responsive right">
                <p>I am passionate about improving students' productivity and emotional well-being. I aim to empower students to take control of their study habits and make smarter choices about social media use.</p>
            </div>
            <div class="mission">
                <h1>Mission</h1>
                <p>"My mission is to explore the effects of social media on student well-being and empower individuals to build healthier online habits."
                </p>
            </div>
        </div>
    </div>



    <script src="assets/js/index.js"></script>
</body>
</html>