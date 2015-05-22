import psycopg2

params = {
  'dbname': 'g1427141_u',
  'username': 'g1427141_u',
  'password': 'BhNt16JkU5',
  'host': 'b.doc.ic.ac.uk',
  'port': 5432
}

conn = psycopg2.connect(**params)

cur = conn.cursor()
cur.execute("SELECT * FROM cities")

'''
Server:             db.doc.ic.ac.uk
Port:               5432
Database:           g1427141_u
Account:            g1427141_u
Password:           BhNt16JkU5
PostgreSQL version: 9.2


psql -h db.doc.ic.ac.uk -p 5432 -d g1427141_u -U g1427141_u
'''