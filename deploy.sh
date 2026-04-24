#!/bin/bash
set -e

echo "======================================"
echo "  Deploy - Desafio ContentOS v2"
echo "======================================"
echo ""

# Build
echo "[1/3] Instalando dependências..."
npm install

echo "[2/3] Gerando build de produção..."
npm run build

echo "[3/3] Criando pacote de deploy..."
rm -f deploy-hostgator.zip
cd dist && zip -r ../deploy-hostgator.zip . && cd ..

echo ""
echo "======================================"
echo "  ✅ Pacote criado: deploy-hostgator.zip"
echo "======================================"
echo ""
echo "--------------------------------------"
echo " OPÇÃO A — Página independente (mais simples)"
echo "--------------------------------------"
echo ""
echo "  1. Acesse: cPanel > Gerenciador de Arquivos"
echo "  2. Entre na pasta: public_html/"
echo "  3. Crie uma nova pasta, ex: 'desafio'"
echo "  4. Faça upload do arquivo deploy-hostgator.zip"
echo "  5. Extraia o zip dentro dessa pasta"
echo "  6. Acesse: https://seudominio.com.br/desafio/"
echo ""
echo "  (Via FTP, suba o conteúdo da pasta dist/ direto)"
echo ""
echo "--------------------------------------"
echo " OPÇÃO B — Página no WordPress"
echo "--------------------------------------"
echo ""
echo "  1. Envie o arquivo 'wordpress-page-template.php' para:"
echo "     wp-content/themes/SEU-TEMA/page-desafio.php"
echo ""
echo "  2. Crie a pasta 'desafio' dentro do tema e suba os arquivos:"
echo "     wp-content/themes/SEU-TEMA/desafio/"
echo "     (extraia o zip do dist/ aqui)"
echo ""
echo "  3. No painel WordPress:"
echo "     Páginas > Adicionar Nova > no campo 'Template'"
echo "     selecione 'Desafio ContentOS' e publique"
echo ""
