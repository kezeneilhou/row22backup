<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function appFormPdf($id)
    {
        $data = RowTower::find($id);
        $pdfContent = PDF::loadView('backend.Admin.DC.pdf', ['data' => $data] )->output();
        return response()->streamDownload(
             fn () => print($pdfContent),
             $id."_application.pdf"
        );
    }
    
    public function generateInvoice(Request $request)
    {
      $invoice = Invoice::where('id',$request->invoiceId)->first();
      $ids = json_decode($request->ids);
      $data  = RowStatus::query()
      ->whereIn('txn_id',$ids)
      ->get();
      $pdfContent = PDF::loadView('pdf.invoice', ['data' => $data,'invoice' => $invoice] )->output();
      return response()->streamDownload(
           fn () => print($pdfContent),
           "filename.pdf"
      );
      return redirect()->back();
    }

    public function generatePermit($towerID)
    {
      $data = RowStatus::where('tower_id', $towerID)->first();
      $pdfContent = PDF::loadView('pdf.permitTelecom', ['data' => $data] )->output();
      return response()->streamDownload(
           fn () => print($pdfContent),
           "permit_".$data->tower_id.".pdf"
      );
    }

    public function downloadAppZip($id)
    {
        $zip = new ZipArchive;
        $fileName = $id.'_app_docs.zip';



        if ($zip->open(public_path('storage/ZipTemp/'.$fileName), ZipArchive::CREATE) === TRUE)
        {
            // Generating Array of Files from Telecom Folder for that Application
            $files = File::files(public_path('storage/TELECOM/'.$id));

            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();
        }

        return response()->download(public_path('storage/ZipTemp/'.$fileName));
    }

    public function downloadUserZip($id)
    {
        $zip = new ZipArchive;
        $fileName = $id.'_user_docs.zip';



        if ($zip->open(public_path('storage/ZipTemp/'.$fileName), ZipArchive::CREATE) === TRUE)
        {
            // Getting User ID from Txn ID
            $target = RowTower::where('id', $id)->first();
            // Generating Array of Files from Telecom Folder for that Application
            $files = File::files(public_path('storage/USER/'.$target->user_id));

            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();
        }

        return response()->download(public_path('storage/ZipTemp/'.$fileName));
    }
}
