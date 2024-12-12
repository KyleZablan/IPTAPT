<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection - Jordan Collection</title>
    <style>
        
:root {
    --primary-color: #111;
    --secondary-color: #fff;
    --accent-color: #f4f4f4;
    --text-color: #333;
    --font-family: 'Arial, sans-serif';
    --container-width: 90%;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: var(--font-family);
    color: var(--text-color);
    background: var(--accent-color);
    line-height: 1.6;
}

.container {
    width: var(--container-width);
    margin: 0 auto;
    padding: 20px;
}

header {
    background: var(--primary-color);
    color: var(--secondary-color);
    padding: 20px 0;
}

header h1 {
    text-align: center;
    margin-bottom: 10px;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
}

nav ul li {
    margin: 0 10px;
}

nav ul li a {
    color: var(--secondary-color);
    text-decoration: none;
    font-weight: bold;
}

.jordan-collection {
    padding: 40px 0;
    text-align: center;
}

.jordan-collection h2 {
    margin-bottom: 20px;
}

.jordan {
    display: inline-block;
    width: calc(33.333% - 40px);
    margin: 20px;
    cursor: pointer;
    position: relative;
}

.jordan img {
    max-width: 100%;
    border-radius: 5px;
}


.jordan h3 {
    margin-top: 10px;
}

.jordan p {
    margin-top: 5px;
}

.buy-now {
    display: inline-block;
    padding: 10px 20px;
    background-color: #000000;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

.buy-now:hover {
    background-color: #ff0000;
}

.details{
    display: none;
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 5px;
    margin-top: 10px;
    text-align: left;
}

.jordan.active .details{
    display: block;
}


footer {
    background: var(--primary-color);
    color: var(--secondary-color);
    text-align: center;
    padding: 20px 0;
}
.logout-button {
    position: absolute;
    top: 20px;
    right: 20px;
    background-color: transparent;
    border: 2px solid var(--secondary-color);
    color: var(--secondary-color);
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    text-transform: uppercase;
    font-weight: bold;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.logout-button:hover {
    background-color: var(--secondary-color);
    color: var(--primary-color);
}

footer {
    margin-top: auto;
    background: var(--primary-color);
    color: var(--secondary-color);
    text-align: center;
    padding: 10px 0;
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Air Jordan Collection</h1>
            <button class="logout-button" onclick="logout()">Log Out</button>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="collection.php">Collection</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="jordan-collection">
            <div class="container">
                <h2>Air Jordan 1-23</h2>
                <div class="jordan" id="jordan1">
                    <img src="../admin/1.jpg" alt="Air Jordan 1">
                    <h3>Air Jordan 1 Retro High OG Satin Bred </h3>
                    <p>Released: 1985</p>
                    <p><a href= "https://www.facebook.com/photo/?fbid=122094427526685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 1 was first released in 1985. It was designed by Peter Moore and was the first signature shoe for Michael Jordan.</p>
                            <p>Price: $66</p>
                        </div>
                </div>
                <div class="jordan" id="jordan2">
                    <img src="../admin/2.jpg" alt="Air Jordan 2">
                    <h3>Air Jordan 2 Retro alternate 87</h3>
                    <p>Released: 1986</p>
                    <p><a href="https://www.facebook.com/photo?fbid=122094427466685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 2 was released in 1986. It was designed by Bruce Kilgore and made in Italy, making it the first luxury basketball shoe.</p>
                        <p>Price: $140</p>
                    </div>

                </div>
                <div class="jordan" id="jordan3">
                    <img src="../admin/3.jpg" alt="Air Jordan 3">
                    <h3>Air Jordan 3 Retro Black Cement 2024 </h3>
                    <p>Released: 1988</p>
                    <p><a href="https://www.facebook.com/photo?fbid=122094427508685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 3 was released in 1988. It was the first Jordan designed by Tinker Hatfield and featured the iconic elephant print.</p>
                        <p>Price: $154</p>
                    </div>

                </div>
                <div class="jordan" id="jordan4">
                    <img src="../admin/4.jpg" alt="Air Jordan 4">
                    <h3>Air Jordan 4 Retro Red Thunder</h3>
                    <p>Released: 1989</p>
                    <p><a href="https://www.facebook.com/photo?fbid=122094427628685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 4 was released in 1989. It featured mesh panels and visible Air cushioning.</p>
                        <p>Price: $636</p>
                    </div>

                </div>
                <div class="jordan" id="jordan5">
                    <img src="../admin/5.jpg" alt="Air Jordan 5">
                    <h3>Air Jordan 5 Retro top 3</h3>
                    <p>Released: 1990</p>
                    <p><a href="https://www.facebook.com/photo?fbid=122094427682685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 5 was released in 1990. It featured a reflective tongue and translucent rubber soles.</p>
                        <p>Price: $331</p>
                    </div>

                </div>
                <div class="jordan" id="jordan6">
                    <img src="../admin/6.jpg" alt="Air Jordan 6">
                    <h3>Air Jordan 6 Black Infrared (2019)
                    </h3>
                    <p>Released: 1991</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094427706685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 6 was released in 1991. It featured a rubber tongue with two holes, a translucent sole, and visible Air cushioning.</p>
                        <p>Price: $409</p>
                    </div>

                </div>
                <div class="jordan" id="jordan7">
                    <img src="../admin/7.jpg" alt="Air Jordan 7">
                    <h3>Air Jordan 7 Raptors (2012)</h3>
                    <p>Released: 1992</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094427868685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 7 was released in 1992. It was inspired by African tribal art and featured Huarache technology.</p>
                        <p>Price: $422</p>
                    </div>

                </div>
                <div class="jordan" id="jordan8">
                    <img src="../admin/8.jpg" alt="Air Jordan 8">
                    <h3>Air Jordan 8 Playoffs (2023)</h3>
                    <p>Released: 1993</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094427856685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p> 
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 8 was released in 1993. It featured a unique lockdown system and bold color-blocking.</p>
                        <p>Price: $145</p>
                    </div>

                </div>
                <div class="jordan" id="jordan9">
                    <img src="../admin/9.jpg" alt="Air Jordan 9">
                    <h3>Air Jordan 9 Bred Patent</h3>
                    <p>Released: 1994</p>
                    <p><a href="hhttps://www.facebook.com/photo/?fbid=122094427964685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 9 was released in 1993. It was the first Jordan not worn by Michael Jordan on the court.</p>
                        <p>Price: $638</p>
                    </div>

                </div>
                <div class="jordan" id="jordan10">
                    <img src="../admin/10.jpg" alt="Air Jordan 10">
                    <h3>Air Jordan 10 Bulls Over Broadway (GS)</h3>
                    <p>Released: 1995</p>
                    <p><a href="https://facebook.com/photo/?fbid=122094428102685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 10 was released in 1994. It celebrated Michael Jordan's career achievements with unique outsole details.</p>
                        <p>Price: $149</p>
                    </div>

                </div>
                <div class="jordan" id="jordan11">
                    <img src="../admin/11.jpg" alt="Air Jordan 11">
                    <h3>Air Jordan 11 Red Velvet (Women's)</h3>
                    <p>Released: 1996</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428030685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 11 was released in 1996. It was inspired by a 19th-century women's dress boot.</p>
                        <p>Price: $259</p>
                    </div>

                </div>
                <div class="jordan" id="jordan12">
                    <img src="../admin/12.jpg" alt="Air Jordan 12">
                    <h3>Air Jordan 12 Flu Game (2016)</h3>
                    <p>Released: 1997</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428204685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 12 was released in 1995. It featured patent leather and a carbon fiber plate.</p>
                        <p>Price: $435</p>
                    </div>

                </div>
                <div class="jordan" id="jordan13">
                    <img src="../admin/13.jpg" alt="Air Jordan 13">
                    <h3>Air Jordan 13 Bred (2017)</h3>
                    <p>Released: 1997</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428300685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 13 was released in 1997. It featured a unique panther paw-like outsole.</p>
                        <p>Price: $427</p>
                    </div>

                </div>
                <div class="jordan" id="jordan14">
                    <img src="../admin/14.jpg" alt="Air Jordan 14">
                    <h3>Air Jordan 14 Last Shot (2018)</h3>
                    <p>Released: 1998</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428324685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 14 was released in 1998. It was inspired by Michael Jordan's love for Italian sports cars.</p>
                        <p>Price: $554</p>
                    </div>

                </div>
                <div class="jordan" id="jordan15">
                    <img src="../admin/15.jpg" alt="Air Jordan 15">
                    <h3>Air Jordan 15 Bred CDP(2008)</h3>
                    <p>Released: 1999</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428378685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 15 was released in 1999. It was inspired by a fighter jet.</p>
                        <p>Price: $928</p>
                    </div>

                </div>
                <div class="jordan" id="jordan16">
                    <img src="../admin/16.jpg" alt="Air Jordan 16">
                    <h3>Air Jordan 16 Bred (2001)</h3>
                    <p>Released: 2001</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428492685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 16 was released in 2001. It featured a removable magnetic shroud.</p>
                        <p>Price: $1078</p>
                    </div>

                </div>
                <div class="jordan" id="jordan17">
                    <img src="../admin/17.jpg" alt="Air Jordan 17">
                    <h3>Air Jordan 17 Chicago Bulls</h3>
                    <p>Released: 2002</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428534685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 17 was released in 2002. It featured a unique lace-cover system.</p>
                        <p>Price: $496</p>
                    </div>

                </div>
                <div class="jordan" id="jordan18">
                    <img src="../admin/18.jpg" alt="Air Jordan 18">
                    <h3>Air Jordan 18 Bred CDP (2008)</h3>
                    <p>Released: 2003</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428624685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 18 was released in 2003. It was the last shoe Michael Jordan wore on an NBA court with the Washington Wizards.</p>
                        <p>Price: $668</p>
                    </div>

                </div>
                <div class="jordan" id="jordan19">
                    <img src="../admin/19.jpg" alt="Air Jordan 19">
                    <h3>Air Jordan 19</h3>
                    <p>Released: 2004</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428732685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 19 was released in 2004. It featured a lightweight design and a tech-flex upper.</p>
                        <p>Price: $427</p>
                    </div>

                </div>
                <div class="jordan" id="jordan20">
                    <img src="../admin/20.jpg" alt="Air Jordan 20">
                    <h3>Air Jordan 20</h3>
                    <p>Released: 2005</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428756685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 20 was released in 2005. It featured an ankle strap and laser-etched designs.</p>
                        <p>Price: $478</p>
                    </div>

                </div>
                <div class="jordan" id="jordan21">
                    <img src="../admin/21.jpg" alt="Air Jordan 21">
                    <h3>Air Jordan 21</h3>
                    <p>Released: 2006</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428942685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 21 was released in 2006. It featured a full-length Zoom Air unit.</p>
                        <p>Price: $360</p>
                    </div>

                </div>
                <div class="jordan" id="jordan22">
                    <img src="../admin/22.jpg" alt="Air Jordan 22">
                    <h3>Air Jordan 22</h3>
                    <p>Released: 2007</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094428942685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 22 was released in 2007. It featured a unique cage design and was inspired by a F-22 Raptor fighter jet.</p>
                        <p>Price: $826</p>
                    </div>

                </div>
                <div class="jordan" id="jordan23">
                    <img src="../admin/23.jpg" alt="Air Jordan 23">
                    <h3>Air Jordan 23</h3>
                    <p>Released: 2008</p>
                    <p><a href="https://www.facebook.com/photo/?fbid=122094429020685195&set=pcb.122094438050685195" class="buy-now" target="_blank">Buy Now</a></p>
                    <div class="details">
                        <h4>Details</h4>
                        <p>The Air Jordan 23 was released in 2008. It featured a unique stitching pattern and was inspired by Michael Jordan's number 23.</p>
                        <p>Price: $491</p>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Air Jordan Collection. All rights reserved.</p>
        </div>
    </footer>
    <script>
        function logout() {
            window.location.href = "main.php"; // Adjust path to your log-out file
        }
    </script>

    <script>
        
        const jordanItems = document.querySelectorAll('.jordan');

        
        jordanItems.forEach(item => {
            item.addEventListener('click', () => {
               
                item.classList.toggle('active');
                
                
                const details = item.querySelector('.details');
                details.style.display = details.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>

