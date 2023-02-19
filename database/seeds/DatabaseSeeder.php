<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Room;
use App\RoomType;
use App\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'role' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'Aaron',
            'role' => 'Guest',
            'email' => 'aaron@gmail.com',
            'password' => bcrypt('aaron123')
        ]);

        RoomType::create([
            'type' => 'Small'
        ]);
        RoomType::create([
            'type' => 'Double'
        ]);
        RoomType::create([
            'type' => 'Large'
        ]);
        RoomType::create([
            'type' => 'VIP'
        ]);

        Room::create([
            'name' => 'Standart Room',
            'room_type' => 1,
            'price' => 275000,
            'promo' => 0,
            'available' => 15,
            'image' => 'standart.jpg'
        ]);

        Room::create([
            'name' => 'Classic Room',
            'room_type' => 1,
            'price' => 300000,
            'promo' => 10,
            'available' => 15,
            'image' => 'classic.jpg'
        ]);

        Room::create([
            'name' => 'VIP Room',
            'room_type' => 2,
            'price' => 750000,
            'promo' => 20,
            'available' => 10,
            'image' => 'VIP.webp'
        ]);

        Room::create([
            'name' => 'VVIP Room',
            'room_type' => 3,
            'price' => 1000000,
            'promo' => 0,
            'available' => 7,
            'image' => 'VVIP.jpg'
        ]);

        Room::create([
            'name' => 'Platinum Room',
            'room_type' => 4,
            'price' => 1200000,
            'promo' => 0,
            'available' => 5,
            'image' => 'platinum.webp'
        ]);

        News::create([
            'title' => 'The public’s understanding of room types may be limiting hotel revenue potential',
            'writer' => 'Jos Schaap',
            'content' => "Hoteliers love their room types and think that their guests do too. But the fact is that standard rooms are the most popular room type booked by guests. If people love premium room types so much, why are there so few of them and so few premium bookings? The fact is that most people don’t love interesting room types – they love the lowest cost room available.

            Why? Because most guests have been conditioned to feel that the goal of travel planning is to find the lowest priced room. Here is the landscape that customers face when shopping: on average, 80% of rooms are non-premium. Then, every site lists their room types in order of price. If we have learned anything from Google, it is that the result at the top of the list is the best answer, right? Is it any wonder why we don’t sell as many premium rooms as we would like?
            
            The Perception of Value
            All our knowledge has its origin in our perceptions. 
            Leonardo da Vinci
            Why is that when it comes to booking a hotel room, even though many people have enough money to splurge on their travels, the majority of us have determined that, when it come to lodging, a standard room is just fine? The typical rationale is that anything more than standard is not needed – a waste of money perhaps. A room is a room after all? There are hundreds of thousands of suites around the world, but most are only occupied about 20% of the time and sit empty the rest of the year. So why exactly is that?
            
            A sizable portion of consumers feel uncomfortable purchasing premium products or services, such as a premium room (even if they can afford to) because they believe it is a privilege which is undue and undeserved.
            
            For many, the idea of spending a large sum of money on luxury seems like a waste. Cynthia Cryder, associate professor of marketing at Washington University in St. Louis’ Olin Business School explains, that broadly speaking, a consumer’s willingness to spend money seems to hinge upon one factor: how psychologically uncomfortable you feel when you have to part with your money.
            
            Researchers have named this uncomfortable phenomenon the impostor syndrome from luxury consumption. We have been conditioned by society that luxury equates “expensive” and “exclusive.” Because of this, many consumers are hesitant to indulge in luxury as they feel it does represent who they truly are – and if they do, they are “embarrassed” by it. They do not want to disclose their wasteful indulgence. The “psychological cost of luxury” takes away any happiness and enjoyment that someone would otherwise get from purchases.
            
            When encountering room type names with words like, Deluxe, Premier, Luxury, Suite, Parlor, Executive, Chairman’s, Presidential, it is easy to see how many believe that such luxury is excessive given that they are most likely in town for something other than staying in the hotel. These feelings are not confined to just one specific group but are prevalent among all consumers from those considered the “luxury target market” to middle-class consumers.
            
            On top of this, most consumers do not look at prices though a rational lens. Non-budgeted expenses seem more expensive. For example, we are conditioned to accept regularly spending large amounts for groceries – which often include discretionary purchases. But it is hard to rationalize an irregular purchase, like a hotel suite, because it is hard to understand the value when we aren’t used to purchasing the product.
            
            A consumer’s perception of what the appropriate price is has been made even harder by the power of the OTAs. With rate shopping, OTA’s promote direct cost comparison by establishing price as the single differentiator. As such, consumers have become conditioned to think “price first.” For example, when searching for a king bed in a 5-star hotel in Aruba, and a guest comes across five or more similar listings, they’ll most likely opt for the lowest-priced option. There may be an available room with stunning sunset views that would really make their Caribbean vacation an unforgettable experience – but the hotel room shopping experience is just not designed to prioritize experience over price.
            
            Re-Framing Value: What Attribute-based Selling (ABS) Can Do
            We know that guests are fixated on price - and of course, price will always matter. But, hotels have the opportunity to reposition price as just one factor of their overall decision.
            
            Instead of the traditional method of offering rooms by room type – where consumers routinely end up picking the lowest priced option – with ABS hoteliers can “unbundle” room inventory and merchandize individual attributes of a room to the guest. This new shopping experience benefits both guests and hoteliers:
            
            Guests can now easily correlate price with things they truly value - the tangible features and unique room attributes. Guests have the choice to spend their money on the bundle of features that gives them the most pleasure.
            With ABS, hotels can monetize more of their assets and in the process increase the perceived value of their product without increasing their objective costs.
            Room features that currently go unnoticed now drive differentiation and minimize direct price comparison for products that are actually different.
            By giving consumers the option to choose features they value most, hoteliers have an opportunity to win on more than just price. The guest that feels good about their reservation – and their stay expectations, tend to be more loyal.
            Any marketer can tell you that the presentation method of an offer, product, or service, can make a huge difference in our decision-making.For a hotel, your room product might just be the “best,” but it won’t be the best if the consumer can’t see its value. To the consumer, it is just another room. So, unless we all want merchandize our rooms like Motel 6 who imply that all rooms are the same with the lights off, something needs to be done to better showcase – and derive appropriate value from – our premium rooms. ABS holds the answer.
            
            About ROOMDEX, INC
            ROOMDEX's hotel upsell software, Upgrade Optimizer, automates, monetizes, and ultimately simplifies the hotel room upgrade process by putting the power of choice in the hotel guest's hands. Automation is the cornerstone of our pioneering hotel optimization platform. ROOMDEX uses hotel reservation, guest data and its proprietary persona and price algorithms to deliver personalized digital offers, greatly enhancing the guest experience. The hotel upsell tool relieves hoteliers of the labor time required by other upselling solutions while delivering high margin revenue and a substantial ROI.
            
            The company was founded by Jos Schaap, Pierre Boettner and Denis Bajet, three industry veterans (Ex. MICROS-OPERA (now Oracle Hospitality), StayNTouch, Shiji and Nor1).  ROOMDEX leverages over 90 years of hotel software innovation experience in PMS, integrations, revenue management, BI, mobile, self-service and upgrade optimization software. Since founding in spring of 2020, ROOMDEX has signed on more than 100 hotels with 9,500 rooms across the U.S., U.K. and Europe.",
            'image' => 'News.jpg'
        ]);
        
        News::create([
            'title' => 'The public’s understanding of room types may be limiting hotel revenue potential',
            'writer' => 'Jos Schaap',
            'content' => "Hoteliers love their room types and think that their guests do too. But the fact is that standard rooms are the most popular room type booked by guests. If people love premium room types so much, why are there so few of them and so few premium bookings? The fact is that most people don’t love interesting room types – they love the lowest cost room available.

            Why? Because most guests have been conditioned to feel that the goal of travel planning is to find the lowest priced room. Here is the landscape that customers face when shopping: on average, 80% of rooms are non-premium. Then, every site lists their room types in order of price. If we have learned anything from Google, it is that the result at the top of the list is the best answer, right? Is it any wonder why we don’t sell as many premium rooms as we would like?
            
            The Perception of Value
            All our knowledge has its origin in our perceptions. 
            Leonardo da Vinci
            Why is that when it comes to booking a hotel room, even though many people have enough money to splurge on their travels, the majority of us have determined that, when it come to lodging, a standard room is just fine? The typical rationale is that anything more than standard is not needed – a waste of money perhaps. A room is a room after all? There are hundreds of thousands of suites around the world, but most are only occupied about 20% of the time and sit empty the rest of the year. So why exactly is that?
            
            A sizable portion of consumers feel uncomfortable purchasing premium products or services, such as a premium room (even if they can afford to) because they believe it is a privilege which is undue and undeserved.
            
            For many, the idea of spending a large sum of money on luxury seems like a waste. Cynthia Cryder, associate professor of marketing at Washington University in St. Louis’ Olin Business School explains, that broadly speaking, a consumer’s willingness to spend money seems to hinge upon one factor: how psychologically uncomfortable you feel when you have to part with your money.
            
            Researchers have named this uncomfortable phenomenon the impostor syndrome from luxury consumption. We have been conditioned by society that luxury equates “expensive” and “exclusive.” Because of this, many consumers are hesitant to indulge in luxury as they feel it does represent who they truly are – and if they do, they are “embarrassed” by it. They do not want to disclose their wasteful indulgence. The “psychological cost of luxury” takes away any happiness and enjoyment that someone would otherwise get from purchases.
            
            When encountering room type names with words like, Deluxe, Premier, Luxury, Suite, Parlor, Executive, Chairman’s, Presidential, it is easy to see how many believe that such luxury is excessive given that they are most likely in town for something other than staying in the hotel. These feelings are not confined to just one specific group but are prevalent among all consumers from those considered the “luxury target market” to middle-class consumers.
            
            On top of this, most consumers do not look at prices though a rational lens. Non-budgeted expenses seem more expensive. For example, we are conditioned to accept regularly spending large amounts for groceries – which often include discretionary purchases. But it is hard to rationalize an irregular purchase, like a hotel suite, because it is hard to understand the value when we aren’t used to purchasing the product.
            
            A consumer’s perception of what the appropriate price is has been made even harder by the power of the OTAs. With rate shopping, OTA’s promote direct cost comparison by establishing price as the single differentiator. As such, consumers have become conditioned to think “price first.” For example, when searching for a king bed in a 5-star hotel in Aruba, and a guest comes across five or more similar listings, they’ll most likely opt for the lowest-priced option. There may be an available room with stunning sunset views that would really make their Caribbean vacation an unforgettable experience – but the hotel room shopping experience is just not designed to prioritize experience over price.
            
            Re-Framing Value: What Attribute-based Selling (ABS) Can Do
            We know that guests are fixated on price - and of course, price will always matter. But, hotels have the opportunity to reposition price as just one factor of their overall decision.
            
            Instead of the traditional method of offering rooms by room type – where consumers routinely end up picking the lowest priced option – with ABS hoteliers can “unbundle” room inventory and merchandize individual attributes of a room to the guest. This new shopping experience benefits both guests and hoteliers:
            
            Guests can now easily correlate price with things they truly value - the tangible features and unique room attributes. Guests have the choice to spend their money on the bundle of features that gives them the most pleasure.
            With ABS, hotels can monetize more of their assets and in the process increase the perceived value of their product without increasing their objective costs.
            Room features that currently go unnoticed now drive differentiation and minimize direct price comparison for products that are actually different.
            By giving consumers the option to choose features they value most, hoteliers have an opportunity to win on more than just price. The guest that feels good about their reservation – and their stay expectations, tend to be more loyal.
            Any marketer can tell you that the presentation method of an offer, product, or service, can make a huge difference in our decision-making.For a hotel, your room product might just be the “best,” but it won’t be the best if the consumer can’t see its value. To the consumer, it is just another room. So, unless we all want merchandize our rooms like Motel 6 who imply that all rooms are the same with the lights off, something needs to be done to better showcase – and derive appropriate value from – our premium rooms. ABS holds the answer.
            
            About ROOMDEX, INC
            ROOMDEX's hotel upsell software, Upgrade Optimizer, automates, monetizes, and ultimately simplifies the hotel room upgrade process by putting the power of choice in the hotel guest's hands. Automation is the cornerstone of our pioneering hotel optimization platform. ROOMDEX uses hotel reservation, guest data and its proprietary persona and price algorithms to deliver personalized digital offers, greatly enhancing the guest experience. The hotel upsell tool relieves hoteliers of the labor time required by other upselling solutions while delivering high margin revenue and a substantial ROI.
            
            The company was founded by Jos Schaap, Pierre Boettner and Denis Bajet, three industry veterans (Ex. MICROS-OPERA (now Oracle Hospitality), StayNTouch, Shiji and Nor1).  ROOMDEX leverages over 90 years of hotel software innovation experience in PMS, integrations, revenue management, BI, mobile, self-service and upgrade optimization software. Since founding in spring of 2020, ROOMDEX has signed on more than 100 hotels with 9,500 rooms across the U.S., U.K. and Europe.",
            'image' => 'News.jpg'
        ]);
        
        News::create([
            'title' => 'The public’s understanding of room types may be limiting hotel revenue potential',
            'writer' => 'Jos Schaap',
            'content' => "Hoteliers love their room types and think that their guests do too. But the fact is that standard rooms are the most popular room type booked by guests. If people love premium room types so much, why are there so few of them and so few premium bookings? The fact is that most people don’t love interesting room types – they love the lowest cost room available.

            Why? Because most guests have been conditioned to feel that the goal of travel planning is to find the lowest priced room. Here is the landscape that customers face when shopping: on average, 80% of rooms are non-premium. Then, every site lists their room types in order of price. If we have learned anything from Google, it is that the result at the top of the list is the best answer, right? Is it any wonder why we don’t sell as many premium rooms as we would like?
            
            The Perception of Value
            All our knowledge has its origin in our perceptions. 
            Leonardo da Vinci
            Why is that when it comes to booking a hotel room, even though many people have enough money to splurge on their travels, the majority of us have determined that, when it come to lodging, a standard room is just fine? The typical rationale is that anything more than standard is not needed – a waste of money perhaps. A room is a room after all? There are hundreds of thousands of suites around the world, but most are only occupied about 20% of the time and sit empty the rest of the year. So why exactly is that?
            
            A sizable portion of consumers feel uncomfortable purchasing premium products or services, such as a premium room (even if they can afford to) because they believe it is a privilege which is undue and undeserved.
            
            For many, the idea of spending a large sum of money on luxury seems like a waste. Cynthia Cryder, associate professor of marketing at Washington University in St. Louis’ Olin Business School explains, that broadly speaking, a consumer’s willingness to spend money seems to hinge upon one factor: how psychologically uncomfortable you feel when you have to part with your money.
            
            Researchers have named this uncomfortable phenomenon the impostor syndrome from luxury consumption. We have been conditioned by society that luxury equates “expensive” and “exclusive.” Because of this, many consumers are hesitant to indulge in luxury as they feel it does represent who they truly are – and if they do, they are “embarrassed” by it. They do not want to disclose their wasteful indulgence. The “psychological cost of luxury” takes away any happiness and enjoyment that someone would otherwise get from purchases.
            
            When encountering room type names with words like, Deluxe, Premier, Luxury, Suite, Parlor, Executive, Chairman’s, Presidential, it is easy to see how many believe that such luxury is excessive given that they are most likely in town for something other than staying in the hotel. These feelings are not confined to just one specific group but are prevalent among all consumers from those considered the “luxury target market” to middle-class consumers.
            
            On top of this, most consumers do not look at prices though a rational lens. Non-budgeted expenses seem more expensive. For example, we are conditioned to accept regularly spending large amounts for groceries – which often include discretionary purchases. But it is hard to rationalize an irregular purchase, like a hotel suite, because it is hard to understand the value when we aren’t used to purchasing the product.
            
            A consumer’s perception of what the appropriate price is has been made even harder by the power of the OTAs. With rate shopping, OTA’s promote direct cost comparison by establishing price as the single differentiator. As such, consumers have become conditioned to think “price first.” For example, when searching for a king bed in a 5-star hotel in Aruba, and a guest comes across five or more similar listings, they’ll most likely opt for the lowest-priced option. There may be an available room with stunning sunset views that would really make their Caribbean vacation an unforgettable experience – but the hotel room shopping experience is just not designed to prioritize experience over price.
            
            Re-Framing Value: What Attribute-based Selling (ABS) Can Do
            We know that guests are fixated on price - and of course, price will always matter. But, hotels have the opportunity to reposition price as just one factor of their overall decision.
            
            Instead of the traditional method of offering rooms by room type – where consumers routinely end up picking the lowest priced option – with ABS hoteliers can “unbundle” room inventory and merchandize individual attributes of a room to the guest. This new shopping experience benefits both guests and hoteliers:
            
            Guests can now easily correlate price with things they truly value - the tangible features and unique room attributes. Guests have the choice to spend their money on the bundle of features that gives them the most pleasure.
            With ABS, hotels can monetize more of their assets and in the process increase the perceived value of their product without increasing their objective costs.
            Room features that currently go unnoticed now drive differentiation and minimize direct price comparison for products that are actually different.
            By giving consumers the option to choose features they value most, hoteliers have an opportunity to win on more than just price. The guest that feels good about their reservation – and their stay expectations, tend to be more loyal.
            Any marketer can tell you that the presentation method of an offer, product, or service, can make a huge difference in our decision-making.For a hotel, your room product might just be the “best,” but it won’t be the best if the consumer can’t see its value. To the consumer, it is just another room. So, unless we all want merchandize our rooms like Motel 6 who imply that all rooms are the same with the lights off, something needs to be done to better showcase – and derive appropriate value from – our premium rooms. ABS holds the answer.
            
            About ROOMDEX, INC
            ROOMDEX's hotel upsell software, Upgrade Optimizer, automates, monetizes, and ultimately simplifies the hotel room upgrade process by putting the power of choice in the hotel guest's hands. Automation is the cornerstone of our pioneering hotel optimization platform. ROOMDEX uses hotel reservation, guest data and its proprietary persona and price algorithms to deliver personalized digital offers, greatly enhancing the guest experience. The hotel upsell tool relieves hoteliers of the labor time required by other upselling solutions while delivering high margin revenue and a substantial ROI.
            
            The company was founded by Jos Schaap, Pierre Boettner and Denis Bajet, three industry veterans (Ex. MICROS-OPERA (now Oracle Hospitality), StayNTouch, Shiji and Nor1).  ROOMDEX leverages over 90 years of hotel software innovation experience in PMS, integrations, revenue management, BI, mobile, self-service and upgrade optimization software. Since founding in spring of 2020, ROOMDEX has signed on more than 100 hotels with 9,500 rooms across the U.S., U.K. and Europe.",
            'image' => 'News.jpg'
        ]);
        
        News::create([
            'title' => 'The public’s understanding of room types may be limiting hotel revenue potential',
            'writer' => 'Jos Schaap',
            'content' => "Hoteliers love their room types and think that their guests do too. But the fact is that standard rooms are the most popular room type booked by guests. If people love premium room types so much, why are there so few of them and so few premium bookings? The fact is that most people don’t love interesting room types – they love the lowest cost room available.

            Why? Because most guests have been conditioned to feel that the goal of travel planning is to find the lowest priced room. Here is the landscape that customers face when shopping: on average, 80% of rooms are non-premium. Then, every site lists their room types in order of price. If we have learned anything from Google, it is that the result at the top of the list is the best answer, right? Is it any wonder why we don’t sell as many premium rooms as we would like?
            
            The Perception of Value
            All our knowledge has its origin in our perceptions. 
            Leonardo da Vinci
            Why is that when it comes to booking a hotel room, even though many people have enough money to splurge on their travels, the majority of us have determined that, when it come to lodging, a standard room is just fine? The typical rationale is that anything more than standard is not needed – a waste of money perhaps. A room is a room after all? There are hundreds of thousands of suites around the world, but most are only occupied about 20% of the time and sit empty the rest of the year. So why exactly is that?
            
            A sizable portion of consumers feel uncomfortable purchasing premium products or services, such as a premium room (even if they can afford to) because they believe it is a privilege which is undue and undeserved.
            
            For many, the idea of spending a large sum of money on luxury seems like a waste. Cynthia Cryder, associate professor of marketing at Washington University in St. Louis’ Olin Business School explains, that broadly speaking, a consumer’s willingness to spend money seems to hinge upon one factor: how psychologically uncomfortable you feel when you have to part with your money.
            
            Researchers have named this uncomfortable phenomenon the impostor syndrome from luxury consumption. We have been conditioned by society that luxury equates “expensive” and “exclusive.” Because of this, many consumers are hesitant to indulge in luxury as they feel it does represent who they truly are – and if they do, they are “embarrassed” by it. They do not want to disclose their wasteful indulgence. The “psychological cost of luxury” takes away any happiness and enjoyment that someone would otherwise get from purchases.
            
            When encountering room type names with words like, Deluxe, Premier, Luxury, Suite, Parlor, Executive, Chairman’s, Presidential, it is easy to see how many believe that such luxury is excessive given that they are most likely in town for something other than staying in the hotel. These feelings are not confined to just one specific group but are prevalent among all consumers from those considered the “luxury target market” to middle-class consumers.
            
            On top of this, most consumers do not look at prices though a rational lens. Non-budgeted expenses seem more expensive. For example, we are conditioned to accept regularly spending large amounts for groceries – which often include discretionary purchases. But it is hard to rationalize an irregular purchase, like a hotel suite, because it is hard to understand the value when we aren’t used to purchasing the product.
            
            A consumer’s perception of what the appropriate price is has been made even harder by the power of the OTAs. With rate shopping, OTA’s promote direct cost comparison by establishing price as the single differentiator. As such, consumers have become conditioned to think “price first.” For example, when searching for a king bed in a 5-star hotel in Aruba, and a guest comes across five or more similar listings, they’ll most likely opt for the lowest-priced option. There may be an available room with stunning sunset views that would really make their Caribbean vacation an unforgettable experience – but the hotel room shopping experience is just not designed to prioritize experience over price.
            
            Re-Framing Value: What Attribute-based Selling (ABS) Can Do
            We know that guests are fixated on price - and of course, price will always matter. But, hotels have the opportunity to reposition price as just one factor of their overall decision.
            
            Instead of the traditional method of offering rooms by room type – where consumers routinely end up picking the lowest priced option – with ABS hoteliers can “unbundle” room inventory and merchandize individual attributes of a room to the guest. This new shopping experience benefits both guests and hoteliers:
            
            Guests can now easily correlate price with things they truly value - the tangible features and unique room attributes. Guests have the choice to spend their money on the bundle of features that gives them the most pleasure.
            With ABS, hotels can monetize more of their assets and in the process increase the perceived value of their product without increasing their objective costs.
            Room features that currently go unnoticed now drive differentiation and minimize direct price comparison for products that are actually different.
            By giving consumers the option to choose features they value most, hoteliers have an opportunity to win on more than just price. The guest that feels good about their reservation – and their stay expectations, tend to be more loyal.
            Any marketer can tell you that the presentation method of an offer, product, or service, can make a huge difference in our decision-making.For a hotel, your room product might just be the “best,” but it won’t be the best if the consumer can’t see its value. To the consumer, it is just another room. So, unless we all want merchandize our rooms like Motel 6 who imply that all rooms are the same with the lights off, something needs to be done to better showcase – and derive appropriate value from – our premium rooms. ABS holds the answer.
            
            About ROOMDEX, INC
            ROOMDEX's hotel upsell software, Upgrade Optimizer, automates, monetizes, and ultimately simplifies the hotel room upgrade process by putting the power of choice in the hotel guest's hands. Automation is the cornerstone of our pioneering hotel optimization platform. ROOMDEX uses hotel reservation, guest data and its proprietary persona and price algorithms to deliver personalized digital offers, greatly enhancing the guest experience. The hotel upsell tool relieves hoteliers of the labor time required by other upselling solutions while delivering high margin revenue and a substantial ROI.
            
            The company was founded by Jos Schaap, Pierre Boettner and Denis Bajet, three industry veterans (Ex. MICROS-OPERA (now Oracle Hospitality), StayNTouch, Shiji and Nor1).  ROOMDEX leverages over 90 years of hotel software innovation experience in PMS, integrations, revenue management, BI, mobile, self-service and upgrade optimization software. Since founding in spring of 2020, ROOMDEX has signed on more than 100 hotels with 9,500 rooms across the U.S., U.K. and Europe.",
            'image' => 'News.jpg'
        ]);
        
        News::create([
            'title' => 'The public’s understanding of room types may be limiting hotel revenue potential',
            'writer' => 'Jos Schaap',
            'content' => "Hoteliers love their room types and think that their guests do too. But the fact is that standard rooms are the most popular room type booked by guests. If people love premium room types so much, why are there so few of them and so few premium bookings? The fact is that most people don’t love interesting room types – they love the lowest cost room available.

            Why? Because most guests have been conditioned to feel that the goal of travel planning is to find the lowest priced room. Here is the landscape that customers face when shopping: on average, 80% of rooms are non-premium. Then, every site lists their room types in order of price. If we have learned anything from Google, it is that the result at the top of the list is the best answer, right? Is it any wonder why we don’t sell as many premium rooms as we would like?
            
            The Perception of Value
            All our knowledge has its origin in our perceptions. 
            Leonardo da Vinci
            Why is that when it comes to booking a hotel room, even though many people have enough money to splurge on their travels, the majority of us have determined that, when it come to lodging, a standard room is just fine? The typical rationale is that anything more than standard is not needed – a waste of money perhaps. A room is a room after all? There are hundreds of thousands of suites around the world, but most are only occupied about 20% of the time and sit empty the rest of the year. So why exactly is that?
            
            A sizable portion of consumers feel uncomfortable purchasing premium products or services, such as a premium room (even if they can afford to) because they believe it is a privilege which is undue and undeserved.
            
            For many, the idea of spending a large sum of money on luxury seems like a waste. Cynthia Cryder, associate professor of marketing at Washington University in St. Louis’ Olin Business School explains, that broadly speaking, a consumer’s willingness to spend money seems to hinge upon one factor: how psychologically uncomfortable you feel when you have to part with your money.
            
            Researchers have named this uncomfortable phenomenon the impostor syndrome from luxury consumption. We have been conditioned by society that luxury equates “expensive” and “exclusive.” Because of this, many consumers are hesitant to indulge in luxury as they feel it does represent who they truly are – and if they do, they are “embarrassed” by it. They do not want to disclose their wasteful indulgence. The “psychological cost of luxury” takes away any happiness and enjoyment that someone would otherwise get from purchases.
            
            When encountering room type names with words like, Deluxe, Premier, Luxury, Suite, Parlor, Executive, Chairman’s, Presidential, it is easy to see how many believe that such luxury is excessive given that they are most likely in town for something other than staying in the hotel. These feelings are not confined to just one specific group but are prevalent among all consumers from those considered the “luxury target market” to middle-class consumers.
            
            On top of this, most consumers do not look at prices though a rational lens. Non-budgeted expenses seem more expensive. For example, we are conditioned to accept regularly spending large amounts for groceries – which often include discretionary purchases. But it is hard to rationalize an irregular purchase, like a hotel suite, because it is hard to understand the value when we aren’t used to purchasing the product.
            
            A consumer’s perception of what the appropriate price is has been made even harder by the power of the OTAs. With rate shopping, OTA’s promote direct cost comparison by establishing price as the single differentiator. As such, consumers have become conditioned to think “price first.” For example, when searching for a king bed in a 5-star hotel in Aruba, and a guest comes across five or more similar listings, they’ll most likely opt for the lowest-priced option. There may be an available room with stunning sunset views that would really make their Caribbean vacation an unforgettable experience – but the hotel room shopping experience is just not designed to prioritize experience over price.
            
            Re-Framing Value: What Attribute-based Selling (ABS) Can Do
            We know that guests are fixated on price - and of course, price will always matter. But, hotels have the opportunity to reposition price as just one factor of their overall decision.
            
            Instead of the traditional method of offering rooms by room type – where consumers routinely end up picking the lowest priced option – with ABS hoteliers can “unbundle” room inventory and merchandize individual attributes of a room to the guest. This new shopping experience benefits both guests and hoteliers:
            
            Guests can now easily correlate price with things they truly value - the tangible features and unique room attributes. Guests have the choice to spend their money on the bundle of features that gives them the most pleasure.
            With ABS, hotels can monetize more of their assets and in the process increase the perceived value of their product without increasing their objective costs.
            Room features that currently go unnoticed now drive differentiation and minimize direct price comparison for products that are actually different.
            By giving consumers the option to choose features they value most, hoteliers have an opportunity to win on more than just price. The guest that feels good about their reservation – and their stay expectations, tend to be more loyal.
            Any marketer can tell you that the presentation method of an offer, product, or service, can make a huge difference in our decision-making.For a hotel, your room product might just be the “best,” but it won’t be the best if the consumer can’t see its value. To the consumer, it is just another room. So, unless we all want merchandize our rooms like Motel 6 who imply that all rooms are the same with the lights off, something needs to be done to better showcase – and derive appropriate value from – our premium rooms. ABS holds the answer.
            
            About ROOMDEX, INC
            ROOMDEX's hotel upsell software, Upgrade Optimizer, automates, monetizes, and ultimately simplifies the hotel room upgrade process by putting the power of choice in the hotel guest's hands. Automation is the cornerstone of our pioneering hotel optimization platform. ROOMDEX uses hotel reservation, guest data and its proprietary persona and price algorithms to deliver personalized digital offers, greatly enhancing the guest experience. The hotel upsell tool relieves hoteliers of the labor time required by other upselling solutions while delivering high margin revenue and a substantial ROI.
            
            The company was founded by Jos Schaap, Pierre Boettner and Denis Bajet, three industry veterans (Ex. MICROS-OPERA (now Oracle Hospitality), StayNTouch, Shiji and Nor1).  ROOMDEX leverages over 90 years of hotel software innovation experience in PMS, integrations, revenue management, BI, mobile, self-service and upgrade optimization software. Since founding in spring of 2020, ROOMDEX has signed on more than 100 hotels with 9,500 rooms across the U.S., U.K. and Europe.",
            'image' => 'News.jpg'
        ]);
        
        News::create([
            'title' => 'The public’s understanding of room types may be limiting hotel revenue potential',
            'writer' => 'Jos Schaap',
            'content' => "Hoteliers love their room types and think that their guests do too. But the fact is that standard rooms are the most popular room type booked by guests. If people love premium room types so much, why are there so few of them and so few premium bookings? The fact is that most people don’t love interesting room types – they love the lowest cost room available.

            Why? Because most guests have been conditioned to feel that the goal of travel planning is to find the lowest priced room. Here is the landscape that customers face when shopping: on average, 80% of rooms are non-premium. Then, every site lists their room types in order of price. If we have learned anything from Google, it is that the result at the top of the list is the best answer, right? Is it any wonder why we don’t sell as many premium rooms as we would like?
            
            The Perception of Value
            All our knowledge has its origin in our perceptions. 
            Leonardo da Vinci
            Why is that when it comes to booking a hotel room, even though many people have enough money to splurge on their travels, the majority of us have determined that, when it come to lodging, a standard room is just fine? The typical rationale is that anything more than standard is not needed – a waste of money perhaps. A room is a room after all? There are hundreds of thousands of suites around the world, but most are only occupied about 20% of the time and sit empty the rest of the year. So why exactly is that?
            
            A sizable portion of consumers feel uncomfortable purchasing premium products or services, such as a premium room (even if they can afford to) because they believe it is a privilege which is undue and undeserved.
            
            For many, the idea of spending a large sum of money on luxury seems like a waste. Cynthia Cryder, associate professor of marketing at Washington University in St. Louis’ Olin Business School explains, that broadly speaking, a consumer’s willingness to spend money seems to hinge upon one factor: how psychologically uncomfortable you feel when you have to part with your money.
            
            Researchers have named this uncomfortable phenomenon the impostor syndrome from luxury consumption. We have been conditioned by society that luxury equates “expensive” and “exclusive.” Because of this, many consumers are hesitant to indulge in luxury as they feel it does represent who they truly are – and if they do, they are “embarrassed” by it. They do not want to disclose their wasteful indulgence. The “psychological cost of luxury” takes away any happiness and enjoyment that someone would otherwise get from purchases.
            
            When encountering room type names with words like, Deluxe, Premier, Luxury, Suite, Parlor, Executive, Chairman’s, Presidential, it is easy to see how many believe that such luxury is excessive given that they are most likely in town for something other than staying in the hotel. These feelings are not confined to just one specific group but are prevalent among all consumers from those considered the “luxury target market” to middle-class consumers.
            
            On top of this, most consumers do not look at prices though a rational lens. Non-budgeted expenses seem more expensive. For example, we are conditioned to accept regularly spending large amounts for groceries – which often include discretionary purchases. But it is hard to rationalize an irregular purchase, like a hotel suite, because it is hard to understand the value when we aren’t used to purchasing the product.
            
            A consumer’s perception of what the appropriate price is has been made even harder by the power of the OTAs. With rate shopping, OTA’s promote direct cost comparison by establishing price as the single differentiator. As such, consumers have become conditioned to think “price first.” For example, when searching for a king bed in a 5-star hotel in Aruba, and a guest comes across five or more similar listings, they’ll most likely opt for the lowest-priced option. There may be an available room with stunning sunset views that would really make their Caribbean vacation an unforgettable experience – but the hotel room shopping experience is just not designed to prioritize experience over price.
            
            Re-Framing Value: What Attribute-based Selling (ABS) Can Do
            We know that guests are fixated on price - and of course, price will always matter. But, hotels have the opportunity to reposition price as just one factor of their overall decision.
            
            Instead of the traditional method of offering rooms by room type – where consumers routinely end up picking the lowest priced option – with ABS hoteliers can “unbundle” room inventory and merchandize individual attributes of a room to the guest. This new shopping experience benefits both guests and hoteliers:
            
            Guests can now easily correlate price with things they truly value - the tangible features and unique room attributes. Guests have the choice to spend their money on the bundle of features that gives them the most pleasure.
            With ABS, hotels can monetize more of their assets and in the process increase the perceived value of their product without increasing their objective costs.
            Room features that currently go unnoticed now drive differentiation and minimize direct price comparison for products that are actually different.
            By giving consumers the option to choose features they value most, hoteliers have an opportunity to win on more than just price. The guest that feels good about their reservation – and their stay expectations, tend to be more loyal.
            Any marketer can tell you that the presentation method of an offer, product, or service, can make a huge difference in our decision-making.For a hotel, your room product might just be the “best,” but it won’t be the best if the consumer can’t see its value. To the consumer, it is just another room. So, unless we all want merchandize our rooms like Motel 6 who imply that all rooms are the same with the lights off, something needs to be done to better showcase – and derive appropriate value from – our premium rooms. ABS holds the answer.
            
            About ROOMDEX, INC
            ROOMDEX's hotel upsell software, Upgrade Optimizer, automates, monetizes, and ultimately simplifies the hotel room upgrade process by putting the power of choice in the hotel guest's hands. Automation is the cornerstone of our pioneering hotel optimization platform. ROOMDEX uses hotel reservation, guest data and its proprietary persona and price algorithms to deliver personalized digital offers, greatly enhancing the guest experience. The hotel upsell tool relieves hoteliers of the labor time required by other upselling solutions while delivering high margin revenue and a substantial ROI.
            
            The company was founded by Jos Schaap, Pierre Boettner and Denis Bajet, three industry veterans (Ex. MICROS-OPERA (now Oracle Hospitality), StayNTouch, Shiji and Nor1).  ROOMDEX leverages over 90 years of hotel software innovation experience in PMS, integrations, revenue management, BI, mobile, self-service and upgrade optimization software. Since founding in spring of 2020, ROOMDEX has signed on more than 100 hotels with 9,500 rooms across the U.S., U.K. and Europe.",
            'image' => 'News.jpg'
        ]);
    }
}
