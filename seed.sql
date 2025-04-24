CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  description TEXT,
  price DECIMAL(10,2),
  image VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO products (name, description, price, image)
VALUES (
  'Violet Bent Backwards Over the Grass',
  'poetry and photography by lana',
  29.99,
  'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1586615121i/43554866.jpg'
);
