<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'author_id' => '2',
            'title' => 'Exploring the Rich Culture of Japan',
            'jpntitle' => '日本の豊かな文化にふれる',
            'articlepublish' => '2022-02-02',
            'slug' => 'exploring-the-rich-culture-of-japan',
            'image' => 'article-images/Seeder1.jpg',
            'body' => 'Japan is a country rich in history, tradition, and culture. From its cuisine and art to its religion and festivals, there are countless aspects of Japanese culture that make it unique and fascinating.

            One of the most well-known aspects of Japanese culture is its cuisine. Japanese food is famous for its emphasis on fresh, seasonal ingredients and simple, elegant preparation. Some of the most popular Japanese dishes include sushi, tempura, udon, and ramen. These dishes are enjoyed not only in Japan but also around the world.

            Another important aspect of Japanese culture is its art. Japanese art is characterized by its attention to detail, minimalist aesthetic, and use of natural materials. Traditional Japanese art includes calligraphy, painting, ceramics, and woodblock printing. Many of these art forms have a long and rich history in Japan, dating back centuries.

            Religion also plays an important role in Japanese culture. Shintoism is the indigenous religion of Japan, and it centers around the worship of kami, or spirits that are believed to inhabit natural objects and phenomena. Buddhism, which was introduced to Japan in the 6th century, also has a significant presence in Japanese culture. Many Japanese people practice a blend of Shintoism and Buddhism, and these religions influence many aspects of daily life in Japan.

            Festivals are also an important part of Japanese culture. There are many festivals throughout the year, each with its own unique customs and traditions. Some of the most famous festivals include the cherry blossom festival, held in the spring when the cherry trees bloom, and the Gion Festival in Kyoto, which is one of the largest and most popular festivals in Japan.

            Another interesting aspect of Japanese culture is its etiquette and social customs. Japanese society places a high value on respect and courtesy, and there are many customs and traditions that reflect this. For example, it is customary to remove one shoes before entering a Japanese home, and there are specific rules for bowing when greeting someone.

            In addition to these aspects of Japanese culture, there are many other interesting and unique elements that make Japan a fascinating country. Whether it is the traditional arts and crafts, the modern pop culture, or the stunning natural beauty, there is something for everyone to appreciate and admire in Japanese culture.
            ',
            'jpnbody' => '日本は、歴史、伝統、文化が豊かな国です。料理や芸術、宗教や祭りに至るまで、日本文化にはユニークで魅力的な要素が数え切れないほどあります。

            日本文化の最もよく知られた側面のひとつが料理です。日本料理は、新鮮な旬の食材とシンプルで上品な調理法を重視することで有名です。代表的な日本料理には、寿司、天ぷら、うどん、ラーメンがあります。これらの料理は、日本だけでなく、世界中で楽しまれています。

            日本文化のもう一つの重要な側面は、芸術です。日本の芸術は、細部へのこだわり、ミニマリズムの美学、自然素材の使用などが特徴です。日本の伝統的な芸術には、書道、絵画、陶芸、木版画などがあります。これらの芸術の多くは、日本では何世紀にもわたる長く豊かな歴史を持っています。

            また、宗教も日本文化において重要な役割を担っています。神道は日本固有の宗教であり、神や自然物や現象に宿ると信じられている霊を崇拝することを中心に据えています。また、6世紀に日本に伝来した仏教も、日本文化の中で重要な存在感を示しています。多くの日本人は神道と仏教を融合させた宗教を信仰しており、これらの宗教は日本での日常生活の多くの側面に影響を与えています。

            また、祭りも日本文化の重要な一部です。一年を通して多くの祭りがあり、それぞれに独自の習慣や伝統があります。最も有名な祭りには、桜が咲く春に行われる桜祭りや、京都の祇園祭などがあります。

            日本文化のもう一つの興味深い側面は、そのエチケットや社会習慣です。日本社会は尊敬と礼儀を重んじ、それを反映した多くの習慣や伝統があります。例えば、日本では家に入る前に靴を脱ぐ習慣がありますし、挨拶をするときのお辞儀の仕方にも決まりがあります。

            このような日本文化に加え、日本を魅力的な国にしている興味深いユニークな要素は他にもたくさんあります。伝統的な芸術や工芸品、現代のポップカルチャー、そして美しい自然など、日本文化には誰にとっても魅力的なものがあります。
            '
        ]);

        Article::create([
            'author_id' => '1',
            'title' => 'From Samurai Warriors to Geishas',
            'jpntitle' => '戦国武将から芸者まで',
            'articlepublish' => '2022-02-02',
            'slug' => 'from-samurai-warriors-to-geishas',
            'image' => 'article-images/Seeder2.png',
            'body' => 'From the powerful samurai warriors to the alluring geishas, Japan is rich history is filled with fascinating characters and traditions that continue to captivate people all over the world.

            The samurai warriors were a legendary class of skilled fighters who played a crucial role in Japan is feudal era. They were known for their honor, discipline, and unwavering loyalty to their lord. The samurai is iconic armor and weapons, such as the katana sword, have become symbols of Japanese culture and heritage.

            On the other hand, geishas are women who are trained in the traditional arts of music, dance, and conversation. They are known for their elegance, grace, and refined beauty. Geishas were once highly respected and sought-after companions for wealthy and powerful men in Japan. Today, they continue to perform and entertain, but their numbers have dwindled.

            Both samurai warriors and geishas represent the rich and complex culture of Japan. Their legacy has influenced Japanese society and has become an important part of Japan identity. The samurai code of honor, or bushido, still resonates with modern Japanese people, emphasizing virtues such as loyalty, courage, and self-control. Meanwhile, geishas embody the traditional arts and customs that continue to be celebrated in Japan today.

            Although Japan has undergone significant changes throughout history, the traditions and legacies of the samurai and geishas continue to be cherished and respected. They are a reminder of the beauty and complexity of Japan culture, and a source of inspiration for people all over the world.
            ',
            'jpnbody' => '力強い武士から魅力的な芸者まで、日本の豊かな歴史は、世界中の人々を魅了し続ける魅力的な人物や伝統に満ちています。

            武士は、日本の封建時代に重要な役割を果たした伝説的なクラスの熟練した戦士でした。彼らは名誉、規律、主君への揺るぎない忠誠で知られています。侍の象徴的な鎧や刀などの武器は、日本の文化や伝統を象徴するものとなっています。

            一方、芸者は、音楽、舞踊、会話などの伝統的な芸術を身につけた女性です。芸者は、音楽、舞踊、会話などの伝統芸能を身につけた女性で、優雅で気品があり、洗練された美しさを持つことで知られている。芸者はかつて、日本の裕福で強力な男性の伴侶として、非常に尊敬され、求められていました。現在も芸者は活躍を続けていますが、その数は減少しています。

            武士も芸者も、日本の豊かで複雑な文化を象徴しています。彼らの遺産は日本社会に影響を与え、日本のアイデンティティの重要な一部となっています。武士道は、忠誠心、勇気、自制心などの美徳を強調し、現代の日本人の心に今も響いている。一方、芸者は、今日でも日本で祝われ続けている伝統的な芸術や習慣を体現しています。

            日本は歴史の中で大きな変化を遂げましたが、武士と芸者の伝統と遺産は大切にされ、尊重され続けています。日本文化の美しさと複雑さを思い起こさせ、世界中の人々にインスピレーションを与える存在なのです。
            '
        ]);

        Article::create([
            'author_id' => '4',
            'title' => 'The Art of Japanese Tea Ceremony: A Window into Japan is  Soul',
            'jpntitle' => '日本の茶道の芸術： 日本の心を知る窓',
            'articlepublish' => '2022-02-02',
            'slug' => 'the-art-of-japanese-tea-ceremony-a-Window-into-japan-is-soul',
            'image' => 'article-images/Seeder3.jpg',
            'body' => 'The Japanese tea ceremony, or chanoyu, is a traditional cultural practice that has been an important part of Japanese culture for centuries. It is a ritual that involves the preparation and presentation of matcha tea, a powdered green tea that is renowned for its health benefits and delicate flavor.

            At its core, the Japanese tea ceremony is about mindfulness, harmony, and respect. It is a way of connecting with the natural world and with others, and it is often considered to be a window into Japan is  soul. The tea ceremony is not just about drinking tea; it is a complete sensory experience that engages the mind, body, and spirit.

            The origins of the tea ceremony can be traced back to the 12th century when Buddhist monks brought tea from China to Japan. Over time, the ceremony evolved into a refined art form that was practiced by the samurai class and later by the general population. Today, the tea ceremony is still widely practiced in Japan, and it has gained popularity around the world as a way of experiencing Japanese culture firsthand.

            The Japanese tea ceremony is a highly structured ritual that involves a series of precise movements and gestures. The host, or tea master, prepares the tea in front of the guests, using a range of utensils such as a bamboo whisk, tea scoop, and tea bowl. The guests watch and participate in the ceremony, and they are expected to follow a strict code of conduct that emphasizes respect, mindfulness, and appreciation for the beauty of nature.

            One of the key aspects of the Japanese tea ceremony is the concept of wabi-sabi, which is a Japanese aesthetic philosophy that emphasizes simplicity, imperfection, and transience. This philosophy is reflected in the tea ceremony is minimalist décor, which often includes natural materials such as wood and bamboo, as well as imperfect pottery and other ceramics. The tea ceremony is also closely connected to the natural world, with the seasons and the changing of the natural environment playing an important role in the ceremony is symbolism and meaning.

            The Japanese tea ceremony is much more than just a simple act of drinking tea. It is a way of connecting with others, with nature, and with oneself. It is a practice that emphasizes the importance of mindfulness, harmony, and respect, and it is a reflection of Japan is unique culture and identity. The tea ceremony is a window into Japan is soul, revealing the beauty, complexity, and depth of Japanese culture and tradition. Whether you are a tea enthusiast or simply curious about Japanese culture, the Japanese tea ceremony is an experience that is not to be missed.
            ',
            'jpnbody' => '茶の湯は、日本の伝統文化のひとつです。茶の湯は、抹茶を点てる儀式である。

            日本の茶道は、心、調和、尊敬の念がその核心にあります。自然界や他者とつながる方法であり、日本の心を知る窓であるとも言われています。茶道は、単にお茶を飲むだけでなく、心、体、精神に働きかける完全な感覚的体験である。

            茶道の起源は、12世紀に仏教の僧侶が中国から日本にお茶を持ち込んだことに始まります。その後、武士や庶民の間で行われるようになり、洗練された芸術として発展していきました。現在も日本では茶道が盛んに行われており、日本文化を体験する方法として、世界中で人気を博しています。

            日本の茶道は、一連の正確な動作と身振りを伴う高度に体系化された儀式である。亭主（茶人）は、茶筅、茶杓、茶碗などの道具を使い、客の前でお茶を点てる。客はこの儀式を見学し、参加します。客は、敬意、心遣い、自然の美しさへの感謝を強調する厳格な行動規範を守ることが求められます。

            日本の茶道の重要な側面のひとつは、「わびさび」という概念です。これは、シンプルさ、不完全さ、はかなさを強調する日本の美的哲学です。この哲学は、茶道のミニマルな装飾に反映されており、木や竹などの自然素材や、不完全な陶器などの陶磁器が多く使われています。また、茶道は自然界と密接に関係しており、季節や自然環境の変化は茶道の象徴や意味において重要な役割を担っています。

            日本の茶道は、ただお茶を飲むという単純な行為以上のものです。他者とのつながり、自然とのつながり、そして自分自身とのつながりの方法です。茶道は、心、調和、尊敬の念の重要性を強調する修行であり、日本独自の文化とアイデンティティを反映するものです。茶道は日本の心の窓であり、日本の文化や伝統の美しさ、複雑さ、奥深さを明らかにしてくれます。お茶が好きな人も、日本文化に興味がある人も、日本の茶道は見逃せない体験となるはずです。
            '
        ]);

        Article::create([
            'author_id' => '2',
            'title' => 'Japanese Gardens: Beauty, Harmony, and Serenity',
            'jpntitle' => '日本の庭園： 美、調和、そして安らぎ',
            'articlepublish' => '2022-02-02',
            'slug' => 'japanese-gardens-beauty-harmony-and-serenity',
            'image' => 'article-images/Seeder4.jpg',
            'body' => 'Japanese gardens are known for their beauty, harmony, and serenity. They reflect Japan is  unique culture and identity, and they have been an important part of Japanese life for centuries. These gardens are carefully designed and crafted to create a peaceful and meditative atmosphere, and they are often considered to be works of art.

            There are many different types of Japanese gardens, each with its own unique style and features. Some gardens are designed to be viewed from a distance, while others are meant to be explored and experienced up close. Some gardens are designed to reflect the changing seasons, while others are meant to evoke a particular mood or emotion.

            One of the most important elements of a Japanese garden is the use of natural materials such as rocks, water, and plants. These materials are carefully chosen and arranged to create a harmonious and balanced environment. Rocks are often used to represent mountains or other natural features, while water is used to create a sense of tranquility and reflection. Plants are chosen for their colors, textures, and seasonal changes, and they are often arranged in a way that emphasizes their natural beauty.

            Another important element of a Japanese garden is the use of symbolism. Many of the elements in a Japanese garden are chosen for their symbolic meaning, and these meanings can vary depending on the specific garden and its design. For example, a bridge in a Japanese garden may represent a crossing point between the physical and spiritual worlds, while a stone lantern may represent enlightenment or the illumination of the mind.

            Japanese gardens are not just beautiful works of art; they are also designed to provide a sense of tranquility and serenity. These gardens are often meant to be places of reflection and meditation, where visitors can escape from the stresses of daily life and connect with nature. They reflect Japan is  unique culture and identity, and they continue to be an important part of Japanese life today.

            In conclusion, Japanese gardens are a testament to Japan is  love of nature and beauty. They are carefully designed and crafted to create a sense of harmony and balance, and they provide a peaceful and meditative atmosphere for visitors. Whether you are a fan of Japanese culture or simply appreciate the beauty of nature, a visit to a Japanese garden is an experience that is not to be missed.
            ',
            'jpnbody' => '日本庭園は、その美しさ、調和、静寂で知られています。日本庭園は、日本独自の文化やアイデンティティを反映し、何世紀にもわたって日本人の生活の中で重要な位置を占めてきました。日本庭園は、平和で瞑想的な雰囲気を作り出すために慎重に設計され、芸術作品と見なされることもあります。

            日本庭園にはさまざまな種類があり、それぞれに独自のスタイルや特徴があります。遠くから眺めることを目的とした庭園もあれば、近くで見て体験することを目的とした庭園もあります。また、四季の移ろいを感じさせる庭園もあれば、特定の気分や感情を呼び起こすような庭園もある。

            日本庭園の最も重要な要素のひとつは、岩、水、植物などの自然素材を使用することです。これらの素材は、調和のとれたバランスのとれた環境を作り出すために、慎重に選ばれ、配置されます。岩は山などの自然を表し、水は静寂と反射の感覚を生み出すために使われます。植物は、色や質感、季節の変化などを考慮して選ばれ、その自然な美しさを強調するように配置されることが多い。

            日本庭園のもう一つの重要な要素は、シンボリズムの使用です。日本庭園にある多くの要素は、その象徴的な意味を持って選ばれており、その意味は、特定の庭園やそのデザインによって異なります。例えば、日本庭園の橋は、物理的な世界と精神的な世界の間の交差点を表すかもしれませんし、石の灯籠は、悟りや心の照らし出しを表すかもしれません。

            日本庭園は、単に美しい芸術作品というだけでなく、静寂と安らぎを与えるように設計されている。日常生活のストレスから解放され、自然とのふれあいを楽しむことができる、内省と瞑想の場としての意味合いもあります。日本庭園は、日本独自の文化やアイデンティティを反映し、今日でも日本人の生活の重要な部分を占めています。

            結論として、日本庭園は、日本人の自然や美への愛を示すものです。日本庭園は、調和とバランスの感覚を生み出すために注意深く設計され、訪れる人々に安らぎと瞑想の雰囲気を与えてくれます。日本文化のファンであれ、単に自然の美しさを堪能するファンであれ、日本庭園への訪問は見逃せない体験となるでしょう'
        ]);




        Article::create([
            'author_id' => '1',
            'title' => 'From Robots to Bullet Trains',
            'jpntitle' => 'ロボットから新幹線まで',
            'articlepublish' => '2022-02-02',
            'slug' => 'from-robots-to-bullet-trains',
            'image' => 'article-images/Seeder5.jpg',
            'body' => 'Japan is a country known for its cutting-edge technology, and nowhere is this more evident than in its robotics industry. From life-sized humanoid robots to miniature robotic pets, Japan has been at the forefront of robotic innovation for decades. These robots are used in a variety of applications, from manufacturing and healthcare to entertainment and education.

            One of the most well-known Japanese robots is ASIMO, developed by Honda. ASIMO stands for Advanced Step in Innovative Mobility, and it is a humanoid robot that can walk, run, and even climb stairs. ASIMO has been used in a variety of applications, including greeting guests at the Honda Welcome Plaza in Tokyo, and performing tasks in factories.

            Another area where Japan excels is in transportation technology. Japan is  famous Shinkansen, or bullet trains, are among the fastest and most efficient trains in the world. These trains can reach speeds of up to 200 miles per hour, and they are a popular mode of transportation for both locals and tourists. The Shinkansen has also been credited with helping to boost Japan is  economy by connecting major cities and making travel more convenient.

            Japan is also a pioneer in the field of robotics, with companies like Toyota and Honda investing heavily in research and development. These companies are developing robots that can assist with household chores, provide healthcare services, and even act as companions for the elderly. Japan is  aging population has created a need for innovative solutions to assist with caregiving, and robotics has emerged as a promising solution.

            In addition to robotics and transportation, Japan is also a leader in the video game industry. Companies like Nintendo and Sony have created some of the most popular video game consoles and games in the world, including the Nintendo Switch and the PlayStation. These games are played by millions of people around the world, and they have had a significant impact on popular culture.

            Japan is  technological innovations have not only had an impact on the country is  economy, but they have also had a significant influence on global culture. Japan is  love of robotics, transportation, and video games has been embraced by people around the world, and these innovations have helped to shape our modern world.

            In conclusion, Japan is  technological innovations reflect the country is  commitment to progress and innovation. From robots to bullet trains, Japan has been at the forefront of cutting-edge technology for decades. These innovations have not only helped to boost Japan is  economy, but they have also had a significant impact on global culture. As Japan continues to develop new and exciting technologies, it is sure to remain a leader in the field of innovation for years to come.

            ',
            'jpnbody' => '日本は最先端技術で知られる国であり、ロボット産業ほどそれが顕著に表れているところはない。等身大の人型ロボットから小型のペット型ロボットまで、日本は何十年にもわたってロボットのイノベーションの最前線に立ってきました。これらのロボットは、製造業、ヘルスケア、エンターテインメント、教育など、さまざまな用途で使用されています。

            日本のロボットで最もよく知られているのは、ホンダが開発した「ASIMO」です。ASIMOはAdvanced Step in Innovative Mobilityの略で、歩いたり走ったり、さらには階段を上ったりすることができるヒューマノイドロボットです。ASIMOは、東京のHondaウェルカムプラザでお客様をお迎えしたり、工場で作業をしたりと、さまざまな用途に活用されています。

            日本が得意とするもう一つの分野は、交通技術です。日本の有名な新幹線は、世界で最も速く、最も効率的な列車の一つです。この列車は時速200マイルにも達し、地元の人々や観光客に人気の交通手段となっています。新幹線は、主要都市を結び、移動をより便利にすることで、日本経済の活性化に貢献したと評価されています。

            日本はロボット工学の分野でもパイオニアであり、トヨタやホンダなどの企業は研究開発に多額の投資をしています。これらの企業は、家事支援やヘルスケアサービス、さらには高齢者の伴走者として活躍するロボットを開発しています。高齢化が進む日本では、介護を支援する革新的なソリューションが求められており、ロボティクスは有望なソリューションとして浮上しています。

            ロボット工学や輸送に加え、日本はビデオゲーム産業でもリーダー的存在です。任天堂やソニーなどの企業は、Nintendo SwitchやPlayStationなど、世界で最も人気のあるビデオゲーム機やゲームを生み出しています。これらのゲームは世界中の何百万人もの人がプレイしており、大衆文化に大きな影響を与えています。

            日本の技術革新は、日本の経済に影響を与えただけでなく、世界の文化にも大きな影響を与えました。日本のロボット工学、交通工学、ビデオゲームへの愛は、世界中の人々に受け入れられ、これらの技術革新は現代世界を形成するのに役立っています。

            結論として、日本の技術革新は、進歩と革新に対する日本のコミットメントを反映しています。ロボットから新幹線まで、日本は何十年にもわたって最先端技術の最前線に立ってきた。これらの技術革新は、日本経済の活性化に貢献しただけでなく、世界の文化に大きな影響を与えてきました。これからも日本は、新しくエキサイティングな技術を開発し、イノベーションの分野で何年もリーダーであり続けることでしょう。
            '
        ]);


        Article::create([
            'author_id' => '4',
            'title' => 'The World of Japanese Anime: A Cultural Phenomenon',
            'jpntitle' => '日本アニメの世界： 文化現象',
            'articlepublish' => '2022-02-02',
            'slug' => 'the-world-of-japanese-anime-a-cultural-phenomenon',
            'image' => 'article-images/Seeder6.jpg',
            'body' => 'Japanese anime, also known as Japanimation, is a cultural phenomenon that is popular around the world. Anime is a type of animation that originated in Japan and is now spreading around the world. Its distinctive visual style and storytelling, which often combines a variety of genres ranging from adventure and action to drama and romance, are some of the reasons why anime has gained such wide appeal.

            One of the reasons why Japanese anime is so popular is its ability to cater to a very wide audience. While anime used to be primarily aimed at children, it has now evolved to target a wide array of ages and interests. Many anime shows explore mature themes such as social issues, mental health, and the human condition, thus making it a medium that can speak to a wide range of people.

            Japanese anime is known for its attention to detail and storytelling, with many series being adaptations of Japanese comics known as manga. These shows often have complex storylines and well-developed characters. Anime takes its time to introduce characters and their relationships, creating an emotional bond between the audience and the story.

            One of the most famous anime series is Akira Toriyama is  "Dragon Ball", which follows the journey of Goku, a young warrior who fights against various enemies to protect his loved ones and the world. The show is known for its action-packed fight scenes, interesting characters, and underlying themes such as perseverance, self-improvement, and friendship.

            Another well-loved anime series is Naoko Takeuchi is  "Sailor Moon", which features a group of magical girls who fight against evil to save the world. The show is praised for its themes of girl power, love, and friendship, and has become a cultural icon for many.

            Overall, Japanese anime is a cultural phenomenon that has captured the hearts of people all over the world. Its unique visual style, storytelling, and diverse themes make it a medium that resonates with people of all ages and backgrounds. As anime continues to develop and evolve, it will surely remain a beloved and important part of Japanese culture for many years to come.

            ',
            'jpnbody' => '日本のアニメは、ジャパニメーションとも呼ばれ、世界中で人気のある文化現象です。アニメは、日本発祥のアニメーションの一種で、現在では世界中に広がっています。その独特のビジュアルスタイルと、冒険やアクション、ドラマやロマンスなど、さまざまなジャンルを組み合わせたストーリーテリングが、アニメがこれほどまでに広く支持される理由のひとつです。

            日本のアニメがこれほどまでに人気を博している理由のひとつに、非常に幅広い層に対応できることが挙げられます。かつてアニメは主に子供を対象としていましたが、現在では幅広い年齢層や興味をターゲットに進化しています。多くのアニメは、社会問題や精神衛生、人間の条件など、成熟したテーマを扱っており、幅広い層の人々に語りかけることができるメディアとなっています。

            日本のアニメは、細部へのこだわりとストーリーテリングで有名であり、多くのシリーズが漫画として知られる日本のコミックを翻案しています。これらの番組は、複雑なストーリー展開とよく練られたキャラクターを持つことが多い。アニメは、登場人物やその関係性をじっくりと紹介し、視聴者とストーリーの間に感情的な絆を作り出します。

            最も有名なアニメシリーズのひとつが鳥山明の「ドラゴンボール」で、愛する人と世界を守るためにさまざまな敵と戦う若い戦士、悟空の旅を描いています。この番組は、アクション満載の戦闘シーン、興味深いキャラクター、そして忍耐、自己啓発、友情といった基本的なテーマで知られています。

            また、武内直子監督の「美少女戦士セーラームーン」は、世界を救うために悪と戦う魔法少女たちを主人公にしたアニメシリーズです。この番組は、女子力、愛、友情をテーマにしており、多くの人にとって文化の象徴となっています。

            全体として、日本のアニメは世界中の人々の心をとらえた文化現象である。そのユニークなビジュアル・スタイル、ストーリーテリング、多様なテーマは、あらゆる年齢層や背景を持つ人々の共感を呼ぶメディアとなっています。アニメが発展し、進化し続ける中で、アニメはこれからもずっと日本文化の中で愛され、重要な存在であり続けるに違いない。
            '
        ]);

        Article::create([
            'author_id' => '1',
            'title' => 'Sushi to Wagyu Beef?',
            'jpntitle' => '寿司から和牛へ？',
            'articlepublish' => '2022-02-02',
            'slug' => 'sushi-to-wagyu-beef',
            'image' => 'article-images/Seeder7.jpg',
            'body' => 'Sushi and Wagyu beef are two of Japan is  most famous culinary delights that have become well-known and highly sought after around the world. They represent the pinnacle of Japanese cuisine and are often considered a luxurious and exotic treat.

            Sushi is a type of Japanese food that consists of vinegared rice topped with various ingredients such as fish, vegetables, and egg. It is often served with soy sauce, wasabi, and pickled ginger. Sushi has a long history in Japan and has evolved over the years to include various styles and preparations, each with their own unique flavor and presentation.

            One of the most famous types of sushi is the nigiri sushi, which consists of a small ball of rice topped with a slice of fish or seafood. The fish used in sushi is typically raw, and the quality of the fish is crucial to the flavor of the dish. The freshness of the fish is emphasized in traditional sushi, which is why sushi is often served at high-end restaurants and sushi bars.

            Wagyu beef, on the other hand, is a type of beef that comes from specific breeds of Japanese cattle. It is known for its high levels of marbling, which gives the meat a tender and buttery texture. Wagyu beef is often considered one of the most expensive and sought-after types of beef in the world.

            There are various grades of Wagyu beef, with the highest being A5, which is the most tender and flavorful. The marbling in the beef is rated on a scale of 1 to 12, with 12 being the highest. Wagyu beef is often served in high-end restaurants and is sometimes used in traditional Japanese cuisine, such as sukiyaki and shabu-shabu.

            While sushi and Wagyu beef are both iconic Japanese foods, they represent different aspects of Japanese cuisine. Sushi is known for its freshness, simplicity, and delicate flavors, while Wagyu beef is known for its rich and buttery texture. Both are highly regarded and appreciated by food lovers around the world.

            In conclusion, sushi and Wagyu beef are two of Japan is  most famous culinary delights that represent the best of Japanese cuisine. Whether you prefer the delicate flavors of sushi or the rich texture of Wagyu beef, both are an essential part of Japanese food culture that continue to captivate and delight people around the world.
            ',
            'jpnbody' => '寿司と和牛は、日本の代表的な食文化であり、世界でもよく知られ、高い人気を誇っている。日本料理の最高峰であり、贅沢でエキゾチックなご馳走とされることもしばしばです。

            寿司は日本料理の一種で、酢飯の上に魚、野菜、卵などさまざまな食材をのせたものです。醤油、わさび、紅しょうがなどをつけて食べることが多い。寿司は日本で長い歴史を持ち、長い年月をかけて様々なスタイルや調理法を取り入れ、それぞれが独自の味わいや表現方法を持つように進化してきました。

            最も有名な寿司の種類の一つは握り寿司で、小さなシャリの上に魚介類の切り身がのっています。寿司に使われる魚は一般的に生のもので、魚の質が料理の味を左右する重要な要素です。伝統的な寿司では魚の鮮度が重視されるため、寿司は高級レストランや寿司バーで提供されることが多いのです。

            一方、和牛は、特定の品種の和牛から採れる牛肉の一種です。霜降りが多く、柔らかくてバターのような食感を持つのが特徴です。和牛は、世界で最も高価で人気のある牛肉のひとつとされています。

            和牛にはさまざまな等級があり、最も高いのはA5で、最も柔らかく、風味が良い。牛肉の霜降りは1～12で評価され、12が最も高い。和牛は高級レストランで提供されることが多く、すき焼きやしゃぶしゃぶなどの伝統的な日本料理にも使われることがあります。

            寿司と和牛は、どちらも日本を代表する食品ですが、日本料理の異なる側面を表しています。寿司は新鮮さ、シンプルさ、繊細な味わいで知られ、和牛は濃厚でバターのような食感で知られています。どちらも世界中の食通から高い評価を受けています。

            結論として、寿司と和牛は、日本料理の最高峰を代表する2大料理である。寿司の繊細な味を好む人も、和牛の豊かな食感を好む人も、どちらも世界中の人々を魅了し続ける日本の食文化に欠かせない存在なのです。
            '
        ]);


        Article::create([
            'author_id' => '1',
            'title' => 'Buddhism and Shintoism: Exploring Japan is  Major Religions and Their Cultural Significance',
            'jpntitle' => '仏教と神道： 日本の主要宗教とその文化的意義を探る',
            'articlepublish' => '2022-02-02',
            'slug' => 'buddhism-and-shintoism-exploring-japan-is-major-religions-and-their-cultural-significance',
            'image' => 'article-images/Seeder8.png',
            'body' => 'Buddhism and Shintoism: Exploring Japan is  Major Religions and Their Cultural Significance
            Buddhism and Shintoism are two of the major religions that have shaped Japanese culture and traditions for centuries. While both religions are distinct in their beliefs and practices, they coexist in Japan and often influence each other.

            Buddhism was introduced to Japan in the 6th century and quickly became one of the major religions in the country. It is based on the teachings of Siddhartha Gautama, also known as the Buddha, and emphasizes the importance of achieving enlightenment and ending suffering. Buddhism has various sects in Japan, including Zen Buddhism and Pure Land Buddhism.

            Shintoism, on the other hand, is an indigenous religion of Japan that has been practiced for thousands of years. It centers on the belief in kami, or spirits, that are present in all aspects of nature. Shintoism places a strong emphasis on ritual and purity, with shrines and rituals playing a significant role in its practice.

            While Buddhism and Shintoism have different beliefs and practices, they often intersect in Japanese culture. For example, many Japanese people incorporate Shinto practices, such as visiting shrines, into their daily lives, while also practicing Buddhism in various forms.

            Both religions also play a significant role in Japanese society, with various festivals and events celebrating their traditions and beliefs. For example, the Obon Festival in August is a Buddhist event that honors the spirits of ancestors, while the Shichi-Go-San Festival in November is a Shinto event that celebrates the growth and development of children.

            The influence of Buddhism and Shintoism can also be seen in Japanese art and architecture. Temples and shrines often feature intricate designs and beautiful gardens, reflecting the importance of nature and aesthetics in both religions. Traditional Japanese arts such as calligraphy, flower arrangement, and tea ceremony also incorporate elements of Buddhism and Shintoism.

            Buddhism and Shintoism are two of the major religions that have shaped Japanese culture and traditions. While they are distinct in their beliefs and practices, they often intersect and influence each other in Japanese society. Their influence can be seen in various aspects of Japanese culture, from festivals and events to art and architecture.
            ',
            'jpnbody' => '仏教と神道は、何世紀にもわたって日本の文化や伝統を形成してきた主要な宗教のひとつです。両宗教は、その信仰と実践が異なるものの、日本では共存しており、しばしば互いに影響を与え合っています。

            仏教は6世紀に日本に伝わり、すぐに日本の主要な宗教のひとつになりました。仏陀として知られるシッダールタ・ゴータマの教えに基づいており、悟りを開き、苦しみを終わらせることの重要性を強調しています。日本には禅宗や浄土宗など、さまざまな宗派の仏教があります。

            一方、神道は、数千年前から信仰されている日本固有の宗教です。神道は、自然のあらゆる側面に存在する神、または精霊への信仰を中心に据えています。神道は儀式と純潔を重視し、神社や儀式はその実践において重要な役割を果たします。

            仏教と神道は異なる信仰と実践を持っていますが、日本文化の中ではしばしば交差しています。例えば、多くの日本人は神社への参拝など神道の習慣を日常生活に取り入れる一方で、様々な形で仏教も実践しています。

            また、両宗教は日本社会で重要な役割を担っており、それぞれの伝統や信仰を祝うさまざまなお祭りやイベントが行われています。例えば、8月のお盆は先祖の霊を祀る仏教の行事であり、11月の七五三は子供の成長と発達を祝う神道の行事である。

            仏教と神道の影響は、日本の美術品や建築物にも見ることができます。寺院や神社には、複雑なデザインや美しい庭園がよく見られますが、これは両宗教における自然や美意識の重要性を反映しています。また、書道、華道、茶道などの日本の伝統芸術にも、仏教と神道の要素が取り入れられています。

            仏教と神道は、日本の文化や伝統を形成してきた主要な宗教のひとつです。仏教と神道は、その信仰と実践が異なるものの、日本社会ではしばしば交わり、互いに影響を及ぼし合っています。その影響は、祭りや行事から芸術や建築に至るまで、日本文化のさまざまな側面に見ることができます。
            '
        ]);


        Article::create([
            'author_id' => '4',
            'title' => 'The Fascinating World of Japanese Mythology',
            'jpntitle' => '魅惑の日本神話の世界',
            'articlepublish' => '2022-02-02',
            'slug' => 'the-fascinating-world-of-japanese-mythology',
            'image' => 'article-images/Seeder9.jpg',
            'body' => 'Japan is a country rich in mythology and folklore, with a wide range of gods, goddesses, and supernatural creatures that have captured the imagination of people for centuries. Japanese mythology is a unique blend of indigenous beliefs and influences from neighboring countries such as China and Korea.

            One of the most well-known figures in Japanese mythology is Amaterasu, the goddess of the sun and a central figure in Shintoism. According to legend, Amaterasu was born from the left eye of the god Izanagi and was responsible for bringing light to the world.

            Another important figure in Japanese mythology is Susanoo, the god of storms and the sea. Susanoo is known for his mischievous nature, and his battles with his sister Amaterasu are said to have caused natural disasters such as storms and floods.

            Japanese mythology is also home to many supernatural creatures, such as the kitsune, or fox spirit, and the kappa, a mischievous water spirit. These creatures have been the inspiration for many stories and legends in Japanese culture.

            One of the most famous stories from Japanese mythology is the tale of Momotaro, a boy born from a peach who goes on a quest to defeat demons with the help of his animal friends. This story has been adapted into various forms of media, including anime and manga.

            Japanese mythology has also had a significant influence on Japanese art and literature. Many famous works of Japanese literature, such as The Tale of Genji and The Pillow Book, incorporate elements of mythology into their stories.

            In modern times, Japanese mythology continues to be a source of inspiration for various forms of media, including anime, manga, and video games. Characters and creatures from Japanese mythology can be seen in popular franchises such as Pokemon and Final Fantasy.

            In conclusion, Japanese mythology is a fascinating world filled with gods, goddesses, and supernatural creatures that have captured the imagination of people for centuries. Its influence can be seen in various aspects of Japanese culture, from literature and art to modern forms of media. Exploring Japanese mythology is a great way to gain a deeper understanding of Japanese culture and its unique heritage.

            ',
            'jpnbody' => '日本は神話とフォークロアの豊かな国であり、さまざまな神、女神、超自然的な生き物が、何世紀にもわたって人々の想像力をかきたててきた。日本の神話は、土着の信仰と中国や韓国などの近隣諸国からの影響が混ざり合った独特のものです。

            日本神話で最も有名な人物の一人は、神道の中心的存在である太陽の女神、天照大神です。伝説によると、アマテラスはイザナギ神の左目から生まれ、世界に光をもたらす役割を担っていた。

            日本神話のもう一つの重要な人物は、嵐と海の神であるスサノオである。スサノオはいたずら好きで知られ、妹のアマテラスとの戦いで嵐や洪水などの天災を引き起こしたと言われています。

            また、日本神話には、キツネや河童などの超自然的な生き物が数多く登場します。これらの生き物は、日本文化における多くの物語や伝説の着想源となっています。

            日本神話で最も有名な物語のひとつは、桃から生まれた少年・桃太郎が、動物たちの助けを借りて鬼退治の旅に出るというものです。この物語は、アニメや漫画など、さまざまなメディアで映像化されています。

            日本神話は、日本の芸術や文学にも大きな影響を与えています。源氏物語』や『枕草子』など、多くの有名な日本文学作品には、神話の要素が取り入れられている。

            現代においても、日本神話はアニメや漫画、ゲームなど、さまざまなメディアのインスピレーションの源となっています。ポケモン』や『ファイナルファンタジー』などの人気作品にも、日本神話に登場するキャラクターや生き物が登場しています。

            結論として、日本神話は神々や女神、超自然的な生き物に満ちた魅力的な世界であり、何世紀にもわたって人々の想像力をかき立ててきた。その影響は、文学や芸術から現代のメディアまで、日本文化のさまざまな側面に見ることができます。日本神話を探求することは、日本文化やそのユニークな遺産をより深く理解するための素晴らしい方法です。
            '
        ]);


        Article::create([
            'author_id' => '2',
            'title' => 'Hatsumode: New Year’s Tradition in Japan',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hatsumode-new-year-tradition-in-japan',
            'image' => 'article-images/10.jpg',
            'body' => 'At the beginning of the new year, large crowds of people flock to the shrines or temples in Japan. That’s an important annual tradition called Hatsumode, paying a visit to a shrine or temple to appreciate the last year’s health and happiness and to pray for another good year. Regardless of their religions and beliefs, hatsumode is a quite popular event on the New Year’s holidays. But why do people do hatsumode? Where to visit? This article will cover all the questions you might come up with about hatsumode. In the first days of the new year, many people visit a Shinto shrine or in some cases a Buddhist temple. This first visit of the year is known as Hatsumōde (初詣) and is done to say thanks for last year and pray for fortune for the new year to deities. It literally means “the first (hatsu) shrine visit (mode)”, so in essence hatsumode is to visit a shrine (or temple) to pray for good luck for the new year.
            Many shrines and temples organise Hatsumode festivities during the first few days of the year, especially on January 1st. At the popular shrines and temples you can experience a festive atmosphere with food stands and many people lining up for a prayer at the main hall, purchasing lucky charms for a fortunate new year and disposing of their lucky charms of the past year. Generally people visit their local shrine or their family temple for hatsumode but recently more people are not religious, thus people tend to visit a popular shrine or temple. There are some differences in how to pray at the shrine and temple. If you don’t know how to pray, we have this article to explain how to pay a visit properly at a shrine.

            Draw Omikuji
            Omikuji is a paper slip that tells your fortune that you can do at a shrine or temple, and since it’s the beginning of the year, it’s a popular thing to do to test your luck at hatsumode.
            There are some different kinds of omikuji but the simplest one is just drawing the paper slip from the box. Cute animal omikuji are available at some shrines as well and you can keep the ornament at home. Some places like Sensoji have an omikuji where you will draw a stick with a number first, and then get a paper slip from the drawers that matches its number.
            There are usually seven categories to tell you luck, and 大吉(daikichi) is the best of luck and 大凶(daikyo) is the worst. The omikuji slip includes the luck of the year and some advice on several aspects of life such as your overall wish, marriage, business, travel, academics and so on. If your result is bad, it’s common to tie the slip on the strings that can be found at the site.

            Get lucky charms
            Omamori is a lucky charm that is believed to protect you and help your wish come true. Get an omamori depending on your wish or need for protection, for example, marriage, safe travel, good health and academics etc.  After one year has passed, it’s common to give the omamori back to the shrine with gratitude, and it will be burned in a sacred fire afterwards.
            Ofuda is a talisman or amulet to put at home. Together with omamori, it’s common to get a new one for the new year. It’s equivalent to the spirits of the deities at the shrine, so it is treated like welcoming a part of the deity’s spirit to the household. It is carefully placed at the altar, and will be an object to daily worship.
            Hamaya is another amulet that you can get from hatsumode. It’s an arrow that literally means piercing evil spirits. It’s common to place it at the altar together with ofuda. It’s originally coming from the old fortune telling where people compete their year’s luck for the harvest with shooting an arrow. You also need to return it after a year has passed.

            Fun facts about hatsumode
            Miko is a shrine maiden wearing the iconic red hakama with a white kimono. You probably recognize them from anime. But one of the most popular part time jobs during New Year’s holidays is working as miko. During hatsumode, it’s the busiest time of the year for popular shrines, and many university students tend to work as a miko to help them offer the lucky charms for visitors. Of course there is a full-time miko but sometimes during New Year, some temporarily part-time miko can be seen.
            ',
            'jpnbody' => '新年が始まると、日本の神社や寺院に大勢の人々が訪れます。それは「初詣」と呼ばれる重要な年次行事で、去年の健康と幸せに感謝し、今年も良い年であるように祈りを捧げるものです。宗教や信念に関係なく、初詣はお正月休みの人気イベントです。では、なぜ初詣をするのでしょうか？どこに行けばいいのでしょうか？この記事では、初詣に関する疑問に答えます。
            新年の最初の日に、多くの人々が神社や場合によっては仏教寺院を訪れます。この年初めの訪問を「初詣」と呼び、去年に感謝し、新年に向けて神仏に幸運を願うために行われます。文字通り、「初めて（hatsu）神社を訪れる（mode）」ことを意味するので、初詣は新年に幸運を祈るために神社（または寺院）を訪れることです。
            多くの神社や寺院は、新年の最初の数日間、特に1月1日に初詣祭りを開催しています。人気のある神社や寺院では、多くの人々がメインホールで祈りを捧げ、幸運のお守りを購入し、去年のお守りを処分するために列を作っている賑やかな雰囲気を体験することができます。一般的に、人々は地元の神社や家族の寺院を訪れますが、最近は宗教的でない人が増えているため、人々はより人気のある神社や寺院を訪れる傾向があります。神社と寺院で祈り方には違いがあります。神社で正しく参拝する方法を説明するための記事もありますので、ご覧ください。
            おみくじを引いてください。おみくじは、神社や寺院で行われる運勢を知ることができる紙切れです。年始に行う初詣では、自分の運勢を試す人が多いです。
            いろいろな種類のおみくじがありますが、最も簡単なのは箱から紙切れを引くことです。可愛い動物のおみくじもいくつかの神社で入手可能で、その飾りを家に飾ることができます。浅草寺のように、まず数字の書かれた棒を引いてから、その数字に対応する引き出しから紙切れを受け取るおみくじもあります。
            通常、運勢は7つのカテゴリーに分かれており、大吉が最高の運勢で、大凶が最悪です。おみくじには、その年の運勢と、全体的な願い、結婚、ビジネス、旅行、学業など、人生の様々な面に関するアドバイスが書かれています。もし結果が悪かった場合は、その紙切れを神社や寺院にある縁に結ぶことが一般的です。

            お守りは、あなたを守り、願いをかなえると信じられている幸運のお守りです。例えば、結婚、安全な旅、健康、学業など、あなたの願いや保護の必要性に応じて、お守りを手に入れてください。一年経った後は、感謝を込めてお守りを神社に返し、その後、神聖な火で燃やされます。 お札は、家に置くお守りやお守りの一種です。お守りと一緒に、新年に新しいものを手に入れることが一般的です。神社の神霊に相当するため、家庭に神霊の一部を迎えるようなものです。注意深く祭壇に置かれ、日々の崇拝の対象となります。
            破魔矢は、初詣で手に入れることができる別のお守りです。文字通り邪気を払う矢です。お札と一緒に祭壇に置くことが一般的です。収穫の運勢を矢で競う古い占いから生まれました。一年経ったら返す必要があります。
            はつもうでのおもしろい事実、巫女は、白い着物に赤い袴を履いたアイコニックな衣装を着た女性で、アニメからでもおなじみかもしれません。ことです。はつもうでは、人気のある神社が一年で最も混雑するため、多くの大学生が訪問者に幸運のお守りを提供するために巫女として働く傾向があります。もございますが、正月には一時的なパートタイムの巫女も見られます'
        ]);

        Article::create([
            'author_id' => '3',
            'title' => 'Nagasaki Lantern Festival',
            'jpntitle' => '長崎ランタンフェスティバル',
            'articlepublish' => '2022-02-02',
            'slug' => 'nagasaki-lantern-festival',
            'image' => 'article-images/11.jpg',
            'body' => 'The festival, started by the residents of Nagasaki Shinchi‘s Chinatown, was originally a celebration for the Chinese new year that marked the beginning of spring. In 1994, they kicked it up in scale to become the Nagasaki Lantern Festival and is now the colorful major winter event of the city. Over 15,000 Chinese lanterns cover center city Nagasaki, bathing the streets in vibrant light. There are also many artistic object placed throughout the city of various shapes and sizes with some reaching over 10m tall.
            On the stage in China town, the main venue of the festival, you will really get a feeling of Chinese culture, as shows are held daily. Look forward to Lion Dances (shishimai), Dragon dances (ryu odori), Chinese acrobats and Erhu (Chinese string instrument) performances. This illusionary and exotic festival goes on for 15 days and attracts over 1,000,000 people.
            Lanterns and large object fill the streets of Nagasaki Chinatown, the main venue of the festival. Thanks to the vibrant colors and festive flavor, you will have an amazing time walking the town while trying the wonderful gourmet. In the venue of Nakashima-gawa park where the Megane Bridge (Japan’s oldest arch shaped bridge: recognized as a national significant cultural asset) stands, you will find the only yellow lanterns of the whole festival, which hang over a river, casting a most fantasy-like reflection in the water below. We also recommend shopping in the Hamanmachi section after strolling around the many limited-time attractions in the city.
            Nagasaki has always boasted a strong relationship with China since long ago. At this festival you will be able to get a good taste of the flamboyant atmosphere that the Chinese new year has to offer. At the “Emperor Parade” held on Saturday afternoons during the festival, people gather in the streets to watch a reenactment of how the emperor celebrated the new year with his people during the Qing dynasty. You can see daily performances of Chinese acrobats and dances in Chinatown, the main venue of the festival. Throughout the city, there are also many events being held at different locations of Chinese historical importance.
            ',
            'jpnbody' => 'この祭りは、長崎新地の中華街の住民によって始められたもので、元々は春の始まりを祝う中国の新年のお祭りでした。1994年には大規模なものに拡大し、現在では長崎市の冬の主要なカラフルなイベントになっています。15,000個以上の中国ランタンが市内中心部を覆い、街を活気に満ちた光で照らしています。また、市内にはさまざまな形やサイズの芸術作品が多数展示され、その中には高さ10m以上のものもあります。祭りのメイン会場である中華街のステージでは、毎日様々なショーが行われ、中国文化を感じることができます。獅子舞、龍踊り、中国のアクロバット、二胡演奏などが見どころです。幻想的でエキゾチックなこの祭りは15日間続き、100万人以上の人々を魅了しています。
            長崎の中華街には、ランタンや大きなオブジェが街を埋め尽くし、華やかな色と祭りの雰囲気に包まれながら、美味しいグルメを試しながら街を歩くことができます。中でも、中島川公園の会場では、日本最古のアーチ型橋である眼鏡橋（国の重要文化財に指定）が架かる場所には、全体の中で唯一黄色いランタンがかかっており、川に映った幻想的な光景が楽しめます。また、街中の期間限定アトラクションを散策した後は、浜町地区でショッピングを楽しむのもおすすめです。
            長崎は昔から中国との強い関係を誇ってきました。この祭りでは、中国の新年が持つ派手な雰囲気を楽しむことができます。祭り期間中の土曜日午後に開催される「皇帝パレード」では、清朝時代に皇帝が人々と新年を祝った様子を再現したパレードが行われ、多くの人々が通りで見物に集まります。また、祭りのメイン会場である長崎新地中華街では、中国のアクロバットや舞踊の公演が毎日行われます。街全体で、中国の歴史的な場所で様々なイベントが開催されています。
            '
        ]);

        Article::create([
            'author_id' => '3',
            'title' => 'Yodogawa Fireworks Festival',
            'jpntitle' => '淀川花火大会',
            'articlepublish' => '2022-02-02',
            'slug' => 'yodogawa-fireworks-festival',
            'image' => 'article-images/12.jpg',
            'body' => 'An excited crowd clad in their best Yukatas, the smell of grilled sausages from the street vendors, sounds of excitement and thrill from kids sitting on their parents’ shoulder, anxiously waiting for the next masterpiece painted on the dark summer sky. Held on the first Saturday of August every year, the annual Yodogawa Fireworks Festival is ranked among the top 10 most popular firework in the Kansai region, and this is indeed one of the most awaited events in Osaka.
            This event, started in 1989, has close to 500,000 people watching the massive display of fireworks. You’ll be awed with the creativity of firework craftsmen who designed the various fireworks that decorates the dark summer sky. Together with the crowds who came from all over Japan, you are connected for that moment, like you are a part of a big family, eagerly waiting for the next launch of firework into the sky.
            You can see the fireworks from many different places, if you want to enjoy the rare experience of being totally immersed in the Japanese festive mood; I personally recommend you sit by Yodogawa on either side with the sweaty packed crowd. All the uneasiness of being sardined in the crowd of the night just disappears when you see children clapping their hands and stamping their little feet with every firework released.
            The fireworks starts at slightly before 8 pm but to beat the crowd and get yourself a good spot, I would urge you to come to reserve your place at least one or 2 hours before. Come earlier to be delighted by the unique Japanese festival food and picnic by the river. If you want to be sure of a spectacular view, there are also reserved seats with tickets priced at 2,500 yen for a standing seat, and up to 8,000 yen per person for a seat complete with a bento picnic box and chilled drinks.
            My personal favorites are the fireworks that flow like waterfalls from the sky. I also like special that portrays famous Japanese comic characters of Hello Kitty and Doraemon. Look out especially for the climax of the day -- with non-stop shots to the sky that lasts about 10 seconds. Night feels like daylight and you will surely be moved by the 50 minutes long gigantic panorama on the summer sky.
            ',
            'jpnbody' => '浴衣姿の興奮した人々、屋台から漂うグリルソーセージの香り、両親の肩に乗った子供たちからのわくわく感やスリルの音、暗い夏の空に描かれた次の傑作を熱心に待ちわびている様子が聞こえます。毎年8月の最初の土曜日に開催される淀川花火大会は、関西地域で最も人気のある花火大会のトップ10にランクされ、大阪で最も待ち望まれているイベントの1つです。
            1989年に始まったこのイベントは、大規模な花火のショーを観賞する50万人近くの人々で賑わいます。様々な花火をデザインする花火職人たちの創造性に感嘆することでしょう。日本中から訪れる人々と一緒に、次々に打ち上げられる花火を待ちわびる大家族の一員のようにつながります。
            多くの場所から花火を観ることができますが、日本のお祭りムードに完全に没頭するというレアな体験をしたい場合は、私は個人的に、蒸し暑い人でいっぱいの淀川の両側に座ることをお勧めします。夜の人混みの不安は、花火が打ち上げられるたびに手を叩いたり足を踏み鳴らしたりする子供たちを見ると消えてしまいます。
            花火は午後8時前に始まりますが、人混みを避けて良い場所を確保するためには、1時間または2時間前に来ることをお勧めします。川沿いにピクニックをしながらユニークな日本の祭り食品を楽しむこともできます。壮観な景色を確実に見たい場合は、立ち見席のチケットが2,500円、弁当と冷たい飲み物が付いた座席は1人当たり8,000円まであります。
            私のお気に入りは、滝のように流れる花火です。また、有名な日本の漫画キャラクターであるハローキティやドラえもんを描いた特別な花火も好きです。特にその日のクライマックスには注目してください。約10秒間続く空に向けられた連続的な花火が上がります。夜が昼間のように感じられ、夏の空に広がる50分間の巨大なパノラマに感動することでしょう。
            '
        ]);

        Article::create([
            'author_id' => '3',
            'title' => 'Japan’s Cherry Blossom Viewing Parties ',
            'jpntitle' => '日本の花見パーティー',
            'articlepublish' => '2022-02-02',
            'slug' => 'japan-cherry-blossom-viewing-parties ',
            'image' => 'article-images/15.jpg',
            'body' => 'Each spring, cherry blossoms grace Japan with colour for a brief and beautiful moment. Such is the fleeting nature of this eagerly anticipated yearly phenomenon that most Japanese news channels cover the flowering. The Japan Meteorological Agency also issues a full-bloom forecast, which follows the blooming as it starts from the south and spreads across the north of Japan. This way no one misses out.
            The full bloom of the cherry blossom happens from late March to April. It is a season of many changes in Japan – including graduation and entrance ceremonies to schools – so there are many reasons to celebrate. At this time, people take a moment to appreciate the brevity of spring and its beauty, with the blooming and falling of cherry blossom.
            Once people know when the blooming will be in their area, it is custom to start organising picnic parties for hanami (flower viewing). This could be a picnic in a bento box with rice balls and fried chicken, or oden, which is a hotpot with white radish, fried tofu, fish cakes and eggs, cooked on a camping stove. People often have these with cans of beers or cups of sake (Japanese rice wine).
            The custom of hanami has a long history, starting in the Nara period (710 to 794) with flower-viewings of plum blossoms. The fragrance of the plum flower indicates the arrival of spring, and it played an important role in court cultures in the Heian period (794-1185).
            The plum flower was commonly used as a theme in poetry competitions in the court. This can be seen in the use of plum-blossom imagery in famous works such as The Tale of Genji by Murasaki Shikibu (Lady Purple), which dates from the 11th century and has been heralded as the world’s first novel.
            Along with plum, appreciation of sakura also grew in the Heian period in a form of poetry known as waka. Translating as “Japanese Song”, waka is arranged in five lines, of five/seven/five/seven/seven syllables. In Kokin-Waka-Shū, the first imperial anthology of Japanese poetry, there is a sustained focus on the beauty of the cherry blossom. For example, a poem by Ariwara no Narihira in the collection reads as follows:
            If ours were a world
            where blossoming cherry trees
            were not to be found,
            what tranquillity would bless
            The human heart in springtime!

            In Narihira’s poem, rather than finding the blossoms peaceful, we are told it disrupts our tranquillity. This is the very idea of mono no aware, a sense of appreciating the brief “perishable beauty” of nature and human emotion. Then and now, the circulation and appreciation of images of cherry blossom seem to be strongly associated with this Japanese aesthetic.
            Mono no aware translates as a “sensitivity to things”. According to historian Paul Varley, you can observe this aesthetic from one of the compilers of the Kokin-Waka-shū, the waka poet Ki no Tsurayuki in his preface. It is “the capacity to be moved by things, whether they are the beauties of nature or the feelings of people”.

            This sense of appreciating nature – petals falling on the ground along with the change of people’s lives, the delightfulness and gentle excitement of it all – is closely connected with the perishing of the moment, and decay. With this comes the emotion of melancholy. As Ki no Tsurayuki puts it in his preface, we are “startled into thoughts on the brevity of life”.

            Varieties of sakura
            The current pervasive image of the landscape of Japanese cherry blossom is in a way constructed and has changed through history and culture. Pictures of cherry blossom often depict one type of blossom, somei-yoshino, which is faded pink with light petals.
            There were many varieties of blossom before this, however, including regional variations. Across Japan, one very early type of blossom was mountain cherry blossom, yamazakura, which was often the focus of cherry blossom imagery, strongly associated with the mountain deity, and spiritual symbolism.
            In contemporary Japan, however, somei-yoshino can be encountered throughout the country. This variety was cultivated during the late Edo period (1603-1868) by a gardener in Somei, Tokyo, who crossed two species to produce a blossom that was easy to plant and fast to grow. Somei-yoshino began to be planted across Japan during the Meiji period (1868-1912), as part of a big push to plant flowers across the country.
            ',
            'jpnbody' => '毎年春に、桜の花が日本を彩ります。この一瞬の美しさを追い求める歴史は長く、日本のニュース番組でも桜の開花が報道されます。気象庁も南から北へと開花が広がる過程を予報し、誰もが見逃さないようにしています。
            桜の満開は3月下旬から4月にかけてで、日本では多くの変化の季節でもあります。入学式や卒業式など、多くの理由があって祝うことができます。この時期、人々は春の短さとその美しさを毎年春になると、桜の花が一瞬だけ美しく日本を彩ります。この待ち遠しい年中行事の儚さゆえ、ほとんどの日本のニュース番組が桜の開花を報じます。また、気象庁は南から北へと広がる開花を追跡し、開花予想を発表します。こうして誰もが見逃すことなく楽しめます。
            桜の満開は、3月下旬から4月にかけてです。この季節は、卒業式や入学式などの多くの変化があるため、祝福すべき理由がたくさんあります。この時期、人々は春の短さと美しさを噛みしめ、桜の開花や散りゆく様子を楽しむ時間を取ります。
            開花予想が出たら、自分の地域の開花時期を知った人たちは、花見のピクニックパーティーの計画を始めます。お弁当箱に入ったおにぎりやから揚げ、または白滝、揚げ豆腐、かまぼこ、卵を使ったおでんなどの料理を、キャンプ用ストーブで温めて食べます。人々は、缶ビールや日本酒のカップと一緒に楽しむことが多いです。
            花見の習慣には、長い歴史があり、奈良時代（710年から794年）には梅の花を鑑賞する花見が行われていました。梅の香りが春の訪れを知らせるとともに、平安時代（794年から1185年）の宮廷文化において重要な役割を果たしました。
            梅の花は、宮廷での詩歌大会でしばしば使われるテーマでした。紫式部による11世紀の名作『源氏物語』では、梅の花のイメージが見られます。この作品は、世界初の長編小説と称されています。感じ、桜の花が咲き散る瞬間を見つめます。
            平安時代には、梅に加えて、桜の鑑賞も和歌の形式で広まりました。和歌は、「和歌」と翻訳され、五・七・五・七・七の音節で構成される五行詩です。最初の日本の詩歌の皇室の歌集である「古今和歌集」では、桜の美しさに長い間焦点が当てられています。例えば、この歌集にある在原業平の歌は次のようになります。

            もしもなく
            ならばなくなる
            さくらのかほり
            たえずたつところに
            人はこころのまま

            業平の詩では、桜の花びらが私たちの静寂を妨げるのではなく、春には人々の心を穏やかにする存在であるというアイデアが示されています。これは物の哀れという概念であり、自然と人間の感情の短い「儚い美しさ」を高く評価することです。当時から現在に至るまで、桜のイメージの循環と鑑賞は、この日本美学と強く関連しているようです。
            物の哀れ（もののあはれ）とは「物事への感受性」を意味します。歴史家ポール・ヴァーレイによれば、この美学は、和歌集の編者の一人である和歌の歌人・紀貫之の序文に見ることができます。それは「自然の美しさであったり、人の感情であったり、あらゆるものに感動する力」です。
            この自然を感じる感性には、花びらが散り落ちる姿や人生の変化、そのすべての魅力的で穏やかな興奮が密接に関連しています。そして、瞬間の崩壊や腐敗に対する感情が湧き上がります。紀貫之は、その序文で「生命の短さについての思考に突き動かされる」と表現しています。

            桜の品種
            現在、日本の桜の景色はある種の構築されたもので、歴史や文化を通じて変化してきました。桜の写真はしばしば、淡いピンク色で軽い花びらを持つソメイヨシノという一種類の花を描いたものです。
            しかしながら、以前には多くの種類の花があり、地域によっても異なりました。日本全国には、山桜と呼ばれる非常に早咲きの桜の品種があり、しばしば桜のイメージの焦点となり、山の神との強い関連や精神的な象徴と結びついていました。
            しかし、現代の日本では、ソメイヨシノが国中で見られます。この品種は江戸時代後期（1603-1868）に、東京都荏原区（現在の大田区）の園芸家が2つの種を交配して生産したもので、植えやすく、成長が早い花を生み出しました。明治時代（1868-1912）には、全国的に花を植える大規模な取り組みの一環として、ソメイヨシノが日本中に植えられるようになりました。
            '
        ]);

        Article::create([
            'author_id' => '3',
            'title' => 'Midosuji and Hikari Illuminations',
            'jpntitle' => '御堂筋と光のイルミネーション',
            'articlepublish' => '2022-02-02',
            'slug' => 'midosuji-and-hikari-illuminations',
            'image' => 'article-images/13.jpg',
            'body' => 'Midosuji Illumination brightens up the cold winter sky of Osaka every year. Trees along the streets are decorated in bright lights, bathing the whole Midosuji area in a sea of lights. You just need to take a walk down the streets of Midosuji to experience this extraordinary world.
            The historical lifeblood of Osaka has always been its waterways. So much so that it became a merchant city, trading with other cities with the canals that criss-cross the city. While these days commerce takes place elsewhere, the theme of water is one that is celebrated in the Osaka Hikari Renaissance, a series of light up and festival events taking place in Fall and Winter each year.
            The festival has grown from its aquatic heart to other centers, which encompass Midosuji Boulevard, while the main Hikari Illuminations are from mid to late December. This is a family-friendly event that has grown in popularity over recent years. Be sure to bring some winter clothes as the evenings can get chilly, with the illuminations taking place between 5 pm and 10 pm.
            ',
            'jpnbody' => '御堂筋イルミネーションは、毎年大阪の寒い冬の空を明るくします。通りに沿って並ぶ木々は、明るい光で飾られ、御堂筋エリア全体が光の海に包まれます。御堂筋を歩いているだけで、この非凡な世界を体験できます。
            大阪の歴史的な命脈は常に水路でした。都市を交差する運河で他の都市と貿易を行い、商業都市となったほどです。現在は商業は他の場所で行われていますが、水のテーマは、秋と冬に開催祭りは、
            その水の心臓部から他の中心地にも広がり、御堂筋大通りを含んでいます。メインの光のイルミネーションは、12月中旬から12月末まで行われます。最近では人気が高まっている家族向けのイベントです。夜は寒くなることがあるので、冬の服を持参するようにしてください。イルミネーションは、午後5時から午後10時までの間に行われます。されるライトアップと祭りのイベント「大阪光のルネサンス」で祝われています。
            '
        ]);

        Article::create([
            'author_id' => '3',
            'title' => 'A Brief History of Fushimi Inari Taisha, Kyoto’s Most Important Shrine',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'a-brief-history-of-fushimi-inari-taisha-kyoto-most-important-shrine',
            'image' => 'article-images/14.jpg',
            'body' => 'Fushimi Inari Taisha is Kyoto’s most important Shinto shrine and one of its most impressive attractions. Located in southern Kyoto, it is famed for its variety of shrines and vermilion torii shrine gates, with thousands of them winding their way up the sacred Mount Inari. Whatever you do, don’t miss it. About Fushimi Inarai Taisha
            Fushimi Inari Taisha is the head shrine of Inari, the god of rice, sake and prosperity and patron of business, merchants and manufacturers. The shrine sits at the base of Mount Inari and includes many smaller sub shrines which span 4 kilometres up the 233 meter (764 ft) mountain. Each of the famous torii shrine gates has been donated by an individual or a Japanese business in the hope of receiving good luck and fortune. The name of the donor is inscribed in black ink on the back of each gate.
            The History of Fushimi Inari Taisha
            The shrine was founded in 711 making it one of Kyoto’s oldest and most historic landmarks. It was founded on Inariyama hill in southwestern Kyoto by the Hata family, moving to its present location in 816. There is a fascinating story attached to the origin of the shrine. The legend goes, a rice cake was shot into the air, which turned into a swan and flew away, eventually landing on a peak of a mountain, where rice grew (an auspicious omen in Japan). This led to the deity Inari Okami (the god of rice) being enshrined on the plateau and the start of Fushimi Inari Taisha.
            The shrine became an object of imperial patronage during the early Heian Period (794-1185). In 942, it was elevated to the highest rank for Shinto shrines. The main shrine structure was built in 1499 and is designated as an Important Cultural Property of Japan. It contains five shrines: a lower shrine, a middle shrine, an upper shrine and auxiliary shrines.
            At the shrine’s entrance stands the historically significant Romon (tower) Gate, the shrine’s main gate, which was built in 1589 thanks to donations from samurai warlord and ruler of Japan, Toyotomi Hideyoshi. At the rear of the shrine’s main grounds is the Senbon Torii (thousands of torii gates), the entrance to the torii gate covered hiking trail. It marks the start of two dense, parallel rows of gates that are the main reason most foreign visitors come to Fushimi Inari Taisha. People of all ages have gathered at the shrine to pray for bountiful harvests, success in business, and the hope of their wishes and dreams coming true. It draws thousands of people, seeking blessings, especially for the first prayers of the New Year. The popular shrine is believed to have over 30,000 sub shrines scattered throughout Japan.

            The Foxes at Fushimi Inari Taisha
            After a few minutes of visiting Fushimi Inari Taisha you will notice that there are dozens of statues of foxes across the shrine grounds. Why you might ask? Foxes or kitsune in Japanese are regarded as the messengers of the gods much like the deer of Nara Park in Nara. Some of the stone foxes even have keys in their mouths. These are keys to the rice granaries which they protect.
            ',
            'jpnbody' => '伏見稲荷大社、京都で最も重要な神社であり、最も印象的な観光スポットの一つです。京都南部に位置し、神聖な稲荷山に沿って赤い鳥居が何千も連なっていることで有名です。絶対に見逃さないようにしてください。伏見稲荷大社について
            伏見稲荷大社は、米、酒、繁栄の神であり、ビジネス、商人、製造業者の守護神である稲荷の総本社です。神社は稲荷山の麓にあり、4キロメートルにわたって233メートル（764フィート）の山を登る多くの小さな神社を含んでいます。有名な鳥居は、それぞれの寄進者や日本の企業によって寄贈され、幸運と繁栄を得ることを願っています。寄贈者の名前は、各鳥居の裏に黒インクで刻まれています。

            伏見稲荷大社の歴史
            神社は711年に創設され、京都で最も古く、最も歴史的なランドマークの1つとなりました。京都南西部の稲荷山に建てられ、816年に現在の場所に移転しました。神社の起源には、興味深い物語があります。伝説によると、餅が空中に飛ばされ、白鳥に変身して飛び去り、最終的に山の頂上に着陸し、そこで米が育ちました（日本での吉兆）。これが稲荷大神（米の神）が高原に祀られ、伏見稲荷大社が始まったきっかけです。
            この神社は、平安時代初期（794-1185）には皇室の庇護を受ける存在になりました。942年には、神社の中でも最高ランクに昇格しました。本殿は1499年に建てられ、日本の重要文化財に指定されています。それには、下社、中社、上社、そして補助社が含まれています。
            神社の入口には、歴史的に重要な楼門（ロモン）があります。この楼門は、日本の戦国武将であり、日本を支配した豊臣秀吉の寄付により1589年に建てられました。神社の奥には、千本鳥居（千本の鳥居）があり、鳥居のトンネルを通る登山道の入り口です。ここから始まる二重に並んだ鳥居が、外国人観光客が伏見稲荷大社を訪れる主な理由です。様々な年代の人々が、豊かな収穫、商売繁盛、そして願いや夢が叶うことを祈ってこの神社に集まります。特に新年の最初の祈りのために、多くの人々が神社を訪れ、神様の祝福を受けに来ます。この人気の神社は、日本全国に3万を超える分社を持っているとされています。

            伏見稲荷大社のキツネたち
            伏見稲荷大社を訪れて数分後、神社の敷地内にキツネの像が数多くあることに気付くでしょう。なぜでしょうか？キツネまたは日本語で「キツネ」と呼ばれるものは、奈良公園の鹿と同じく、神様の使いとして崇められています。石のキツネの中には、口に鍵をくわえているものがあります。これらの鍵は、キツネが守る米倉の鍵です。
            '
        ]);


    }
}
