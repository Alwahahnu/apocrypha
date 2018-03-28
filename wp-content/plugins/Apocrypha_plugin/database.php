<?php

include_once (plugin_dir_path(__FILE__) . 'parameters.php');

function create_table(){
// Structure de la table `auteur`

$wpdb = openBDD();
    
$wpdb->query("
CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `editor` (
  `id` int(11) NOT NULL,
  `editor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `editor` int(11) DEFAULT NULL,
  `user` int(11) NOT NULL,
  `picture` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `name` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `type` (`type`),
  ADD KEY `category` (`category`),
  ADD KEY `author` (`author`),
  ADD KEY `editor` (`editor`);
  
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`name`) REFERENCES `name` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`type`) REFERENCES `type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_3` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_4` FOREIGN KEY (`author`) REFERENCES `author` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_5` FOREIGN KEY (`editor`) REFERENCES `editor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

");
}

function drop_table(){
    $wpdb = openBDD();
    $wpdb->query("DROP TABLE IF EXISTS type, name, category, author, editor, item");
}

register_activation_hook(__FILE__, 'create_table');
register_deactivation_hook(__FILE__, 'drop_table');
