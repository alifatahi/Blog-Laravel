<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $post = new \blog\Post([

        'img' => 'img\blog\Startups.jpeg',
        'title' => 'Why Startups Shouldnt Rely Solely on Gig Marketplaces for Developers',
        'body' => 'You’ve got a big idea for the next best app, and want to get a piece of the 2016 tech economy pie: The problem is, you’re not a developer, and you lack the financial resources to hire someone full-time to build your app. As someone already involved in the startup world, you turn to your contacts.
        But their three pieces of advice dont work out: 1) None of your friends are developers. 2) You search for a technical co-founder, without finding a good fit.
        And, 3) when you investigate their third piece of advice, Fiverr, the marketplace for professional services, that doesnt turn out well, either.'

      ]);
      $post->save();

      $post = new \blog\Post([

        'img' => 'img\blog\Five Easy Tools to Build a Website.jpeg',
        'title' => 'Five Easy Tools to Build a Website',
        'body' => 'This story appears in the October 2011 issue of Startups. Subscribe »
        No matter how modest your launch, your business will need a web presence. Maybe youve been putting it off. After all, we werent all put on earth to write code on the web--and hiring someone who was is expensive. Luckily, you dont have to know a thing about programming to build a respectable website these days. There are loads of affordable--even free--tools that do the grunt work for you.
        Youll need a sense of what you want your website to do for your business. As long as you have a germ of an idea, the best do-it-yourself services will guide you along. Youll also find plenty of options for syncing your website with other online tools like Facebook pages, Twitter profiles, YouTube channels and PayPal accounts. Its surprisingly easy to get a simple but powerful website up and running in a few hours.'

      ]);
      $post->save();

      $post = new \blog\Post([

        'img' => 'img\blog\tips-hiring-great-web-developer.jpeg',
        'title' => '5 Tips for Hiring a Great Web Developer',
        'body' => 'A web developer can be one of your most critical hires. After all, thats the person who will create the online face of your company and enable you to interact virtually with your customers.
        So, its especially important that you hire the right talent the first time out. Otherwise, you risk hurting your business, as well as wasting time and money seeking a replacement.
        Here are five tips that can help in the selection process:
        1. Hire for DNA first, then work experience.
        When I hire web developers, their personal DNA is the most important consideration. While experience is important, the bigger predictor of success is someones innate DNA and how it fits your company. Are drive, determination, persistence, curiosity, important to you culture? Or, are you more low-key and relaxed about time management and deadlines? Whatever characteristics make up your culture, you want to ensure that the web developer will fit in.
        For example, a brilliant web developer who has worked at a large financial institution may not do well at a startup. Why? A startup typically requires traits like versatility, adaptability, risk-taking and a self-starter personality, but these may be less important at a large company.'

      ]);
      $post->save();

      $post = new \blog\Post([

        'img' => 'img\blog\20160407154516-error-500-server-message.jpeg',
        'title' => '5 Questions to Determine If Youve Outgrown Your Web Hosting',
        'body' => 'Web hosting can seem like a commodity these days. You just choose the amount of disk space and bandwidth you need, and you’re up and running. Whereas before there were all sorts of limitations imposed on you, nowadays you are spoiled with choices, and hosting costs have become almost inconsequential for most businesses.
        But thinking that web hosting is a commodity like electricity or gas is a big mistake. The simple fact is that web hosting has a lot of moving parts, and they all need to work in harmony to deliver a high quality, uninterrupted service. Choosing a low cost host might seem like a rational choice but in fact it could be a false economy due to the harm that it can cause your business.
        So let’s look at five factors you need to take into consideration to help you understand if your web hosting is in fact helping your business or holding it back.'

      ]);
      $post->save();

      $post = new \blog\Post([

        'img' => 'img\blog\20160616052639-Communication.jpeg',
        'title' => 'Who Watches the Watchmen?',
        'body' => 'You might recognize this article’s title as an important question posed in Alan Moore’s classic graphic novel, "Watchmen." If you’re unfamiliar with the novel, this line examines what happens when heroes (the Watchmen) are left unchecked. What happens when one of them goes rogue and can’t stopped? It’s fundamentally a call for a checks and balances approach -- one that applies to various aspects of life and business.
        For a tech-focused example of the need for “watchers,” consider a typical IT department’s system management tool. These tools are used by IT departments of all sizes, from small start-ups to larger early-stage firms with explosive growth. These tools are similar to a hero protecting citizens, but in this case it’s a company’s valuable data requiring protection. But what happens if the tool itself is compromised or malfunctions? Who watches the performance of the tool when the tool itself is designed to do the watching?'

      ]);
      $post->save();

      $post = new \blog\Post([

        'img' => 'img\blog\1393524984-10-questions-ask-optimizing-website-mobile-users.jpeg',
        'title' => '7 Reasons You Should Redesign Your Small Business Website in WordPress',
        'body' => 'Your website serves as the digital storefront for your business. If it doesn’t look appealing, load quickly or even have a mobile version, customers are going to keep walking. Many small business owners rely on their website to bring in a steady stream of leads and educate potential customers on what they offer.'
      ]);
      $post->save();

      $post = new \blog\Post([

        'img' => 'img\blog\20151117222236-cellphone-guy-designer-web-architechture-working.jpeg',
        'title' => '14 Hot Web Design Trends From 2015',
        'body' => 'The loudest content medium out there has finally learned how to be quiet. In 2015, web design moved away from information overload to an aesthetic revolving around empty space and simplicity. Taking a cue from magazines, web pages are using large high-definition photographs and typography to lure in readers with eye-pleasing openers before revealing further content.'
      ]);
      $post->save();
    }
}
