import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Widgets Demo',
      theme: ThemeData(primarySwatch: Colors.blue),
      home: WidgetDemo(),
    );
  }
}

class WidgetDemo extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text('Flutter Widgets Demo')),
      body: SingleChildScrollView(
        child: Column(
          children: [
            _buildContainer(),
            _buildGridView(),
            _buildListView(),
            _buildListViewBuilder(),
            _buildListViewSeparated(),
            _buildStack(),
          ],
        ),
      ),
    );
  }

  Widget _buildContainer() {
    return Container(
      margin: EdgeInsets.all(10.0),
      color: Colors.amber[600],
      width: 100.0,
      height: 100.0,
      child: Center(
        child: Text('Container', style: TextStyle(color: Colors.white)),
      ),
    );
  }

  Widget _buildGridView() {
    return Container(
      height: 200,
      padding: EdgeInsets.all(10.0),
      child: GridView.count(
        crossAxisCount: 2,
        crossAxisSpacing: 10,
        mainAxisSpacing: 10,
        shrinkWrap: true,
        children: List.generate(6, (index) {
          return Container(
            color: Colors.teal[(index + 1) * 100],
            child: Center(child: Text('Item ${index + 1}')),
          );
        }),
      ),
    );
  }

  Widget _buildListView() {
    return Container(
      height: 150,
      child: ListView(
        padding: EdgeInsets.all(8),
        children: [
          _buildListItem('Entry A', Colors.amber[600] ?? Colors.amber),
          _buildListItem('Entry B', Colors.amber[500] ?? Colors.amber),
          _buildListItem('Entry C', Colors.amber[100] ?? Colors.amber),
        ],
      ),
    );
  }

  Widget _buildListViewBuilder() {
    final List<String> entries = ['A', 'B', 'C'];
    final List<int> colorCodes = [600, 500, 100];
    return Container(
      height: 150,
      child: ListView.builder(
        padding: EdgeInsets.all(8),
        itemCount: entries.length,
        itemBuilder: (BuildContext context, int index) {
          return _buildListItem(
            'Entry ${entries[index]}',
            Colors.amber[colorCodes[index]] ?? Colors.amber,
          );
        },
      ),
    );
  }

  Widget _buildListViewSeparated() {
    final List<String> entries = ['A', 'B', 'C'];
    final List<int> colorCodes = [600, 500, 100];
    return Container(
      height: 150,
      child: ListView.separated(
        padding: EdgeInsets.all(8),
        itemCount: entries.length,
        itemBuilder: (BuildContext context, int index) {
          return _buildListItem(
            'Entry ${entries[index]}',
            Colors.amber[colorCodes[index]] ?? Colors.amber,
          );
        },
        separatorBuilder: (BuildContext context, int index) => Divider(),
      ),
    );
  }

  Widget _buildListItem(String text, Color color) {
    return Container(
      height: 50,
      color: color,
      child: Center(child: Text(text, style: TextStyle(color: Colors.white))),
    );
  }

  Widget _buildStack() {
    return SizedBox(
      width: 250,
      height: 250,
      child: Stack(
        children: [
          Container(width: 250, height: 250, color: Colors.white),
          Container(
            padding: EdgeInsets.all(5.0),
            alignment: Alignment.bottomCenter,
            decoration: BoxDecoration(
              gradient: LinearGradient(
                begin: Alignment.topCenter,
                end: Alignment.bottomCenter,
                colors: [
                  Colors.black.withAlpha(0),
                  Colors.black12,
                  Colors.black45,
                ],
              ),
            ),
            child: Text(
              'Foreground Text',
              style: TextStyle(color: Colors.white, fontSize: 20.0),
            ),
          ),
        ],
      ),
    );
  }
}
