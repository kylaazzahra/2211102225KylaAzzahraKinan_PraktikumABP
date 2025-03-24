import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import '../models/cart_model.dart';
import '../models/item.dart';
import 'cart_screen.dart';
import 'package:intl/intl.dart'; // Import intl untuk format mata uang

class HomeScreen extends StatelessWidget {
  HomeScreen({super.key});

  final List<Item> availableItems = [
    Item(id: 1, name: "Kaos Polos", price: 150000),
    Item(id: 2, name: "Jeans Skinny", price: 250000),
    Item(id: 3, name: "Jaket Hoodie", price: 350000),
    Item(id: 4, name: "Kemeja Flanel", price: 200000),
    Item(id: 5, name: "Sepatu Sneakers", price: 500000),
    Item(id: 6, name: "Topi Baseball", price: 75000),
    Item(id: 7, name: "Sweater Oversize", price: 300000),
    Item(id: 8, name: "Jas Formal", price: 600000),
    Item(id: 9, name: "Dasi Klasik", price: 50000),
    Item(id: 10, name: "Sandal Casual", price: 100000),
    Item(id: 11, name: "Kacamata Hitam", price: 125000),
    Item(id: 12, name: "Jaket Kulit", price: 700000),
    Item(id: 13, name: "Celana Chino", price: 275000),
    Item(id: 14, name: "Polo Shirt", price: 175000),
    Item(id: 15, name: "Dompet Kulit", price: 150000),
    Item(id: 16, name: "Tas Ransel", price: 400000),
    Item(id: 17, name: "Kaos Kaki", price: 50000),
    Item(id: 18, name: "Jam Tangan", price: 900000),
    Item(id: 19, name: "Gelang Kulit", price: 85000),
    Item(id: 20, name: "Belt Kulit", price: 175000),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text("Kaystore"),
        actions: [
          IconButton(
            icon: const Icon(Icons.shopping_cart),
            onPressed: () {
              Navigator.push(
                context,
                MaterialPageRoute(builder: (context) => const CartScreen()),
              );
            },
          ),
        ],
      ),
      body: ListView.builder(
        itemCount: availableItems.length,
        itemBuilder: (context, index) {
          final item = availableItems[index];
          return ListTile(
            title: Text(item.name),
            subtitle: Text(
              NumberFormat.currency(
                locale: 'id_ID',
                symbol: 'Rp ',
              ).format(item.price),
            ),
            trailing: ElevatedButton(
              onPressed: () {
                Provider.of<CartModel>(context, listen: false).add(item);
              },
              child: const Text("Tambah"),
            ),
          );
        },
      ),
    );
  }
}
