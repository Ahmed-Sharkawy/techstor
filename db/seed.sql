INSERT INTO cats (`name`) VALUES ('Laptops'),('PCs'),('Mobiles');


INSERT INTO  products
(`name`, `desc`, `price`, `piecec_no`, `img`, `cats_id`)
VALUES
('lenovo','this is dummy description for Project', 15000, 10, '1.jpg', 1),
('dell laptop','this is dummy description for Project', 10000, 10, '2.jpg', 1),
('hp laptop','this is dummy description for Project', 8000, 8, '3.jpg', 1),
('lenovo thinkpad','this is dummy description for Project', 13000, 5, '4.jpg', 1),
('pc 123','this is dummy description for Project', 5000, 3, '5.jpg', 2),
('pc 456','this is dummy description for Project', 6000, 4, '6.jpg', 2),
('pc 789','this is dummy description for Project', 7000, 2, '7.jpg', 2),
('samsung ay 7aga','this is dummy description for Project', 5000, 100, '8.jpg', 3),
('oppo ay 7aga','this is dummy description for Project', 5500, 50, '9.jpg', 3),
('hwawei ay 7aga','this is dummy description for Project', 5200, 30, '10.jpg', 3);


INSERT INTO admins (`name`, `email`, `password`) VALUES ('Ahmed maher', 'ahmedmaher0110@gmail.com', '$2y$10$PPCUS6/vne7eSGuyYSo6eeJSYBxwk3ulMeIw0mvW7KPNjd/usEazi');